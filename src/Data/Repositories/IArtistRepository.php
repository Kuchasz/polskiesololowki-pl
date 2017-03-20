<?php

namespace PS\Data\Repositories;

use PS\Domain\Artist\Entities\Artist;

interface IArtistRepository
{
    function findAll();
    function save(Artist $artist);
}