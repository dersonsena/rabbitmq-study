<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;

// Create a socket connection
$connection = getConnection();

// Create a communication channel between a broker and queue
$channel = $connection->channel();

// Create/declare a queue to be used
$channel->queue_declare('hello', false, false, false, false);

// Create a message to be fired into queue
$msg = new AMQPMessage('Hello World!');

// Use the channel to public a message into queue
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

// Close channel and connection
$channel->close();
$connection->close();