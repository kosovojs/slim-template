<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

use Geoservices\Controllers\ReportController;

return function (App $app) {
	//$container = $app->getContainer();
	
	$app->get('/api/report/{id}', ReportController::class . ':getReport');

    /* $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        $container->get('logger')->info("Slim-Skeleton '/' route");
        return $response->withJson(['aa'=> 'bb'], 201);
    }); */
};
