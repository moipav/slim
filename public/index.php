<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();
// $app->addErrorMidleware(true, true, true);

$app->get('/', function ($request, $response) {
    $response->getBody()->write('Welcome to sl1m');
    return $response;
});

$app->get('/companies', function ($request, $response) {
    $response->getBody()->write('GET /companies');
    return $response;
});

$app->get('/users', function ($request, $response) {
    $response->getBody()->write('GET /users');
    return $response;
});

$app->get('/users/{id}', function ($request, $response, $args) {
    $id = $args['id'];
    $response->getBody()->write("My id: {$id}");
    return $response;
});

$app->run();