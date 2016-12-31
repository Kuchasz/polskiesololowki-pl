<?php

namespace PS\Web\Core;

use DI\ContainerBuilder;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Tools\Setup;
use Interop\Container\ContainerInterface;
use PS\Data\Repositories\ArtistRepository;
use PS\Data\Repositories\IArtistRepository;
use PS\Twig\Extensions\AssetsExtension;
use PS\Web\Config\Db;
use PS\Web\Config\DoctrineFactory;
use PS\Web\Config\TwigFactory;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Twig_SimpleFunction;

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