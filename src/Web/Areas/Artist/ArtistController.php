<?php

namespace PS\Web\Areas\Artist;

use PS\Web\Core\Controller;

class ArtistController extends Controller
{
    public function details(string $name){
        return $this->render(['name'=>$name]);
    }
}