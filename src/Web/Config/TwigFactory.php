<?php


namespace PS\Web\Config;


use Interop\Container\ContainerInterface;
use PS\Twig\Extensions\AssetsExtension;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

class TwigFactory
{
    public static function create()
    {
        return function (ContainerInterface $c) {
            $twig = new Twig(__DIR__ . '/../Views/', [
                'cache' => false
            ]);

            $assetsUrl = '/public';

            $twig->addExtension(new AssetsExtension($assetsUrl));

            $twig->addExtension(new TwigExtension(
                $c->get('router'),
                $c->get('request')->getUri()
            ));

            return $twig;
        };
    }
}
