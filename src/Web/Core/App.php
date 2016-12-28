<?php

namespace PS\Web\Core;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $definitions = [
            'settings.displayErrorDetails' => true,
            Twig::class => function (ContainerInterface $c) {

                $twig = new Twig(__DIR__.'/../Modules/', [
                    'cache' => 'cache/views'
                ]);

                $twig->addExtension(new TwigExtension(
                    $c->get('router'),
                    $c->get('request')->getUri()
                ));

                return $twig;
            }
        ];
        $builder->addDefinitions($definitions);
    }
}