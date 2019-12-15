<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
	};
	
	//https://odan.github.io/2017/11/30/creating-your-first-slim-framework-application.html
	$container['environment'] = function () {
		$scriptName = $_SERVER['SCRIPT_NAME'];
		$_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
		return new Slim\Http\Environment($_SERVER);
	};
};
