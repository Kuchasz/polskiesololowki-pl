<?php

namespace PS\Data\Core;

use Doctrine\ORM\EntityManagerInterface;

abstract class Repository
{
    protected $session;

    function __construct(EntityManagerInterface $entityManager)
    {
        $this->session = $entityManager->getRepository($this->getEntityClassName());
    }

    protected abstract function getEntityClassName(): string;
}