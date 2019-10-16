<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpAmqpLib\Message\AMQPMessage;

// Creating a connection with Broker
$connection = getConnection();

// Creating the channel
$channel = $connection->channel();
$channel->queue_declare('task_queue', false, true, false, false);

$data = implode(' ', array_slice($argv, 1));

if (empty($data)) {
    $data = "New task to work queue!";
}

$msg = new AMQPMessage($data, [
    'delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT
]);

$channel->basic_publish($msg, '', 'task_queue');

echo '[x] Sent ', $data, "\n";