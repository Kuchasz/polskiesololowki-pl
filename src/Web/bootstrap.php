<?php

use PS\Architecture\Middleware\LoggerMiddleware;
use Slim\Http\Request;
use Slim\Http\Response;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$app = new DI\Bridge\Slim\App();

$app->add(new LoggerMiddleware());

$app->any('/{controller}/{action}', function(string $controller, string $action, Request $request, Response $response){

});

$app->run();