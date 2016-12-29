<?php

namespace PS\Web\Config;

use PS\Web\Core\App;
use PS\Web\Modules\Artist\Controllers\ArtistController;
use PS\Web\Modules\Artist\Controllers\ArtistsController;

class Routes{

    function registerRoutes(App $app){
        $app->get('/artist/{name}', [ArtistController::class, 'details']);
        $app->get('/artists', [ArtistsController::class, 'list']);
    }

}

