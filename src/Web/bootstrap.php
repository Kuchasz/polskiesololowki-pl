<?php

use PS\Architecture\Middleware\LoggerMiddleware;
use PS\Web\Modules\Artist\Controllers\ArtistController;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

if (!is_dir('cache/views')) {
    mkdir('cache/views', 0777, true);
}

$app = new \PS\Web\Core\App();

$app->any('/artist/{name}', [ArtistController::class, 'details']);

$app->run();