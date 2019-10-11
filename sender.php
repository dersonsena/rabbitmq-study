<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

// Creating a connection with Broker
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');

// Creating the channel
$channel = $connection->channel();
$channel->queue_declare('hello', false, false, false, false);

// Creating a message and publish in channel
$msg = new AMQPMessage('Hello World!');
$channel->basic_publish($msg, '', 'hello');

echo " [x] Sent 'Hello World!'\n";

// Closing the channel and connection
$channel->close();
$connection->close();