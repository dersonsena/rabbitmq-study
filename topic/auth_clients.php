<?php

require_once __DIR__ . '/../vendor/autoload.php';

$connection = getConnection();
$channel = $connection->channel();

$channel->exchange_declare('auth.client', 'topic', false, false, false);

list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

$channel->queue_bind($queue_name, 'auth.client', 'auth.client.create');

echo " [*] Waiting for logs. To exit press CTRL + C\n";

$callback = function ($msg) {
    echo ' [x] ', $msg->delivery_info['routing_key'], ':', $msg->body, "\n";
};

$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

while ($channel->is_consuming()) {
    $channel->wait();
}

$channel->close();
$connection->close();