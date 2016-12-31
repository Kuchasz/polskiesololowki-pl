<?php

namespace PS\Web\Core;

use DI\ContainerBuilder;
use Doctrine\ORM\EntityManagerInterface;
use PS\Data\Repositories\ArtistRepository;
use PS\Data\Repositories\IArtistRepository;
use PS\Web\Config\DoctrineFactory;
use PS\Web\Config\TwigFactory;
use Slim\Views\Twig;

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $definitions = [
            'settings.displayErrorDetails' => true,
            Twig::class => TwigFactory::create(),
            EntityManagerInterface::class => DoctrineFactory::create(),
            IArtistRepository::class => function(EntityManagerInterface $entityManager){
                return new ArtistRepository($entityManager);
            }
        ];

        $builder->addDefinitions($definitions);
    }
}