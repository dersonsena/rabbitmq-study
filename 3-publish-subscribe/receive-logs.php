<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;

$connection = getConnection();

$channel = $connection->channel();
$channel->exchange_declare('logs', 'fanout', false, false, false);

// Create/declare the queue with a random name
list($queue_name, ,) = $channel->queue_declare("", false, false, true, false);

// Making bind between Exchange and Queue
$channel->queue_bind($queue_name, 'logs');

echo "[*] Waiting for logs to storage in \"{$queue_name}\". To exit press CTRL + C\n";

$callback = function (AMQPMessage $msg) {
    echo ' [x] ', $msg->body, "\n";
};

$channel->basic_consume($queue_name, '', false, true, false, false, $callback);

while ($channel->is_consuming()) {
    $channel->wait();
}

$channel->close();
$connection->close();