<?php

require __DIR__ . '/../src/config.php';
require __DIR__ . '/../src/SlimRest.php';

$app = new \SlimRest\App;

$app->run();

/*
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/config.php';
require __DIR__ . '/../src/DbManager.php';

$app = new \Slim\App($CONFIG);

$app->get('/users', function (Request $request, Response $response) {
  $users = array(1,2,3);
	$response->getBody()->write(json_encode($users));

	return $response;
});

$app->get('/countries', function (Request $request, Response $response) {
  $countries = array(1,2,3);
	$response->getBody()->write(json_encode($countries));

	return $response;
});

$app->run();
*/