<?php

namespace PS\Web\Core;

use DI\ContainerBuilder;
use Interop\Container\ContainerInterface;
use PS\Twig\Extensions\AssetsExtension;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Twig_SimpleFunction;

class App extends \DI\Bridge\Slim\App
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $definitions = [
            'settings.displayErrorDetails' => true,
            Twig::class => function (ContainerInterface $c) {

                $twig = new Twig(__DIR__ . '/../Views/', [
                    'cache' => 'cache/views'
                ]);

                $assetsUrl = '/public';

                $twig->addExtension(new AssetsExtension($assetsUrl));

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