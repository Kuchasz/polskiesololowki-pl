<?php

namespace PS\Data\Core;

use Doctrine\ORM\EntityManagerInterface;

abstract class Repository
{
    protected $session;
    protected $entityManager;

    function __construct(EntityManagerInterface $entityManager)
    {
        $this->session = $entityManager->getRepository($this->getEntityClassName());
        $this->entityManager = $entityManager;
    }

    protected abstract function getEntityClassName(): string;
}