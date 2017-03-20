<?php

namespace PS\Web\Areas\Artist;

use PS\Data\Repositories\IArtistRepository;
use PS\Domain\Artist\Entities\Artist;
use PS\Web\Core\Controller;
use Slim\Http\Response;
use Slim\Views\Twig;

class ArtistsController extends Controller
{
    private $artistRepository;
    public function __construct(Twig $twig, Response $response, IArtistRepository $artistRepository)
    {
        parent::__construct($twig, $response);
        $this->artistRepository = $artistRepository;
    }

    public function list()
    {
        return $this->render([
            'artists' => $this->artistRepository->findAll()
        ]);
    }
}