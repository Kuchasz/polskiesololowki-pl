<?php

namespace PS\Data\Repositories;

use PS\Data\Core\Repository;
use PS\Domain\Artist\Entities\Artist;

class ArtistRepository extends Repository implements IArtistRepository
{
    protected function getEntityClassName(): string
    {
        return Artist::class;
    }

    function findAll()
    {
        return $this->session->findAll();
    }

    function save(Artist $artist)
    {
        $this->entityManager->persist($artist);
        $this->entityManager->flush();
    }
}