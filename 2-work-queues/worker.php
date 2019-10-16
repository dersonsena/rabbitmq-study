<?php

use PhpAmqpLib\Message\AMQPMessage;

require_once __DIR__ . '/../vendor/autoload.php';

// Create a communication channel between a broker and queue
$connection = getConnection();

// Create a socket connection
$channel = $connection->channel();

// Create/declare a queue to be used
// Setting up as durable (3th parameter as true) in case of RabbitMQ crashed, restart etc
$channel->queue_declare('task_queue', false, true, false, false);

echo " [*] Waiting for messages. To exit press CTRL + C\n";

// Callback function to know what to do when receive a message 
$callback = function (AMQPMessage $msg) {
    echo ' [x] Received ', $msg->body, "\n";
    sleep(substr_count($msg->body, '.'));
    echo " [x] Done\n";

    // Activate Acknowledgment return
    $msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
};

// Tt will dispatch it to the next worker that is not still busy.
$channel->basic_qos(null, 1, null);

// Activate Acknowledgment in case of work(s) crashed (4th parameter as false)
$channel->basic_consume('task_queue', '', false, false, false, false, $callback);

while ($channel->is_consuming()) {
    $channel->wait();
}

$channel->close();
$connection->close();