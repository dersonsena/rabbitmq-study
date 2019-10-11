<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1413c5ab64af471582b9ed3d9e80d8b9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static $classMap = array (
        'PhpAmqpLib\\Channel\\AMQPChannel' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Channel/AMQPChannel.php',
        'PhpAmqpLib\\Channel\\AbstractChannel' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Channel/AbstractChannel.php',
        'PhpAmqpLib\\Connection\\AMQPConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPConnection.php',
        'PhpAmqpLib\\Connection\\AMQPLazyConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPLazyConnection.php',
        'PhpAmqpLib\\Connection\\AMQPLazySocketConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPLazySocketConnection.php',
        'PhpAmqpLib\\Connection\\AMQPSSLConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPSSLConnection.php',
        'PhpAmqpLib\\Connection\\AMQPSocketConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPSocketConnection.php',
        'PhpAmqpLib\\Connection\\AMQPStreamConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AMQPStreamConnection.php',
        'PhpAmqpLib\\Connection\\AbstractConnection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Connection/AbstractConnection.php',
        'PhpAmqpLib\\Exception\\AMQPBasicCancelException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPBasicCancelException.php',
        'PhpAmqpLib\\Exception\\AMQPChannelClosedException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPChannelClosedException.php',
        'PhpAmqpLib\\Exception\\AMQPChannelException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPChannelException.php',
        'PhpAmqpLib\\Exception\\AMQPConnectionClosedException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPConnectionClosedException.php',
        'PhpAmqpLib\\Exception\\AMQPConnectionException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPConnectionException.php',
        'PhpAmqpLib\\Exception\\AMQPDataReadException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPDataReadException.php',
        'PhpAmqpLib\\Exception\\AMQPEmptyDeliveryTagException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPEmptyDeliveryTagException.php',
        'PhpAmqpLib\\Exception\\AMQPException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPException.php',
        'PhpAmqpLib\\Exception\\AMQPExceptionInterface' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPExceptionInterface.php',
        'PhpAmqpLib\\Exception\\AMQPHeartbeatMissedException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPHeartbeatMissedException.php',
        'PhpAmqpLib\\Exception\\AMQPIOException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPIOException.php',
        'PhpAmqpLib\\Exception\\AMQPIOWaitException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPIOWaitException.php',
        'PhpAmqpLib\\Exception\\AMQPInvalidArgumentException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPInvalidArgumentException.php',
        'PhpAmqpLib\\Exception\\AMQPInvalidFrameException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPInvalidFrameException.php',
        'PhpAmqpLib\\Exception\\AMQPLogicException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPLogicException.php',
        'PhpAmqpLib\\Exception\\AMQPNoDataException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPNoDataException.php',
        'PhpAmqpLib\\Exception\\AMQPNotImplementedException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPNotImplementedException.php',
        'PhpAmqpLib\\Exception\\AMQPOutOfBoundsException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPOutOfBoundsException.php',
        'PhpAmqpLib\\Exception\\AMQPOutOfRangeException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPOutOfRangeException.php',
        'PhpAmqpLib\\Exception\\AMQPProtocolChannelException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPProtocolChannelException.php',
        'PhpAmqpLib\\Exception\\AMQPProtocolConnectionException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPProtocolConnectionException.php',
        'PhpAmqpLib\\Exception\\AMQPProtocolException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPProtocolException.php',
        'PhpAmqpLib\\Exception\\AMQPRuntimeException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPRuntimeException.php',
        'PhpAmqpLib\\Exception\\AMQPSocketException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPSocketException.php',
        'PhpAmqpLib\\Exception\\AMQPTimeoutException' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exception/AMQPTimeoutException.php',
        'PhpAmqpLib\\Exchange\\AMQPExchangeType' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Exchange/AMQPExchangeType.php',
        'PhpAmqpLib\\Helper\\DebugHelper' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/DebugHelper.php',
        'PhpAmqpLib\\Helper\\MiscHelper' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/MiscHelper.php',
        'PhpAmqpLib\\Helper\\Protocol\\MethodMap080' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/Protocol/MethodMap080.php',
        'PhpAmqpLib\\Helper\\Protocol\\MethodMap091' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/Protocol/MethodMap091.php',
        'PhpAmqpLib\\Helper\\Protocol\\Protocol080' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/Protocol/Protocol080.php',
        'PhpAmqpLib\\Helper\\Protocol\\Protocol091' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/Protocol/Protocol091.php',
        'PhpAmqpLib\\Helper\\Protocol\\Wait080' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/Protocol/Wait080.php',
        'PhpAmqpLib\\Helper\\Protocol\\Wait091' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/Protocol/Wait091.php',
        'PhpAmqpLib\\Helper\\SocketConstants' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Helper/SocketConstants.php',
        'PhpAmqpLib\\Message\\AMQPMessage' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Message/AMQPMessage.php',
        'PhpAmqpLib\\Wire\\AMQPAbstractCollection' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AMQPAbstractCollection.php',
        'PhpAmqpLib\\Wire\\AMQPArray' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AMQPArray.php',
        'PhpAmqpLib\\Wire\\AMQPDecimal' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AMQPDecimal.php',
        'PhpAmqpLib\\Wire\\AMQPReader' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AMQPReader.php',
        'PhpAmqpLib\\Wire\\AMQPTable' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AMQPTable.php',
        'PhpAmqpLib\\Wire\\AMQPWriter' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AMQPWriter.php',
        'PhpAmqpLib\\Wire\\AbstractClient' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/AbstractClient.php',
        'PhpAmqpLib\\Wire\\Constants' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/Constants.php',
        'PhpAmqpLib\\Wire\\Constants080' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/Constants080.php',
        'PhpAmqpLib\\Wire\\Constants091' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/Constants091.php',
        'PhpAmqpLib\\Wire\\GenericContent' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/GenericContent.php',
        'PhpAmqpLib\\Wire\\IO\\AbstractIO' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/IO/AbstractIO.php',
        'PhpAmqpLib\\Wire\\IO\\SocketIO' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/IO/SocketIO.php',
        'PhpAmqpLib\\Wire\\IO\\StreamIO' => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib/Wire/IO/StreamIO.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1413c5ab64af471582b9ed3d9e80d8b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1413c5ab64af471582b9ed3d9e80d8b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1413c5ab64af471582b9ed3d9e80d8b9::$classMap;

        }, null, ClassLoader::class);
    }
}