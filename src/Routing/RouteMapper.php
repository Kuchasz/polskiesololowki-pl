<?php

namespace PS\Routing;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RouteMapper
{
    private $controllers;
    private $reader;
    public function __construct(array $controllers)
    {
        $this->controllers = $controllers;
        AnnotationRegistry::registerFile('Actions/Get.php');
        AnnotationRegistry::registerFile('Actions/Post.php');
        $this->reader = new AnnotationReader();
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response,  callable $next)
    {
        $controllerName = $args['controller'];
        $actionName = $args['action'];



    }
}