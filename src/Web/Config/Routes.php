<?php

namespace PS\Web\Config;

use PS\Web\Areas\Artist\ArtistController;
use PS\Web\Areas\Artist\ArtistsController;
use PS\Web\Core\App;

class Routes{

    function registerRoutes(App $app){
        $app->get('/artist/{name}', [ArtistController::class, 'details']);
        $app->get('/artists', [ArtistsController::class, 'list']);
    }

}

