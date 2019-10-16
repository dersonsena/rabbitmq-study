<?php

use PhpAmqpLib\Message\AMQPMessage;

require_once __DIR__ . '/../vendor/autoload.php';

// Create a socket connection
$connection = getConnection();

// Create a communication channel between a broker and queue
$channel = $connection->channel();

// Create/declare a queue to be used
$channel->queue_declare('hello', false, false, false, false);

echo " [*] Waiting for messages. To exit press CTRL + C\n";

// Callback function to know what to do when receive a message 
$callback = function (AMQPMessage $msg) {
    echo '[x] Received ', $msg->body, "\n";
};

// Use the channel to start a queue consumer
$channel->basic_consume('hello', '', false, true, false, false, $callback);

while ($channel->is_consuming()) {
    $channel->wait();
}

$channel->close();
$connection->close();