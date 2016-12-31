<?php

namespace PS\Web\Areas\Artist;

use PS\Data\Repositories\IArtistRepository;
use PS\Web\Core\Controller;
use Slim\Http\Response;
use Slim\Views\Twig;

class ArtistController extends Controller
{
    private $artistRepository;
    public function __construct(Twig $twig, Response $response, IArtistRepository $artistRepository)
    {
        parent::__construct($twig, $response);
        $this->artistRepository = $artistRepository;
    }

    public function details(string $name){
        $artist = $this->artistRepository->findAll()[0];

        return $this->render(['name'=>$artist->name]);
    }
}