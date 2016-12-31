<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$app = new \PS\Web\Core\App();

$entityManagerFactory = \PS\Web\Config\DoctrineFactory::create();
$entityManager = $entityManagerFactory();

return ConsoleRunner::createHelperSet($entityManager);
