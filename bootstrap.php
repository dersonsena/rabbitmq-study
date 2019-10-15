<?php

use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Load application environment from .env file
 */
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

function getConnection(): AMQPStreamConnection
{
    return new AMQPStreamConnection(
        getenv('RABBITMQ_HOST'),
        getenv('RABBITMQ_PORT'),
        getenv('RABBITMQ_DEFAULT_USER'),
        getenv('RABBITMQ_DEFAULT_PASS')
    );
}