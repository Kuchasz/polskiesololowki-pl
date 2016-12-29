<?php

use PS\Web\Config\Routes as RoutesConfig;
use PS\Web\Core\App;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

if (!is_dir('cache/views')) {
    mkdir('cache/views', 0777, true);
}

$app = new App();

$routesConfig = new RoutesConfig();
$routesConfig->registerRoutes($app);

$app->run();