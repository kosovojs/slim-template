<?php

$settings = [];

// Slim settings
$settings['displayErrorDetails'] = true;// getenv('APP_DEBUG') === 'true'
$settings['determineRouteBeforeAppMiddleware'] = true;
$settings['addContentLengthHeader'] = false;

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

// Monolog settings
$settings['logger'] = [
	'name' => 'geoservices',
	'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
	'level' => \Monolog\Logger::DEBUG,
];

// Database settings
$settings['db'] = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'database' => 'test',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'flags' => [
        PDO::ATTR_PERSISTENT => false,
        // Enable exceptions
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Set default fetch mode
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];

return ['settings'=>$settings]; 
