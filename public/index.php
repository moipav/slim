<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
// $app->addErrorMidleware(true, true, true);

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Welcome to slim');
    return $response;
});

$app->get('/companies', function ($request, $response) {
    $response->getBody()->write('GET /companies');
    return $response;
});

$app->run();