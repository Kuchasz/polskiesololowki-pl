<?php

namespace PS\Web\Core;

use Slim\Http\Response;
use Slim\Views\Twig;

abstract class Controller
{
    private $view;
    private $response;

    public function __construct(Twig $twig, Response $response)
    {
        $this->view = $twig;
        $this->response = $response;
    }

    protected function render(array $data){
        list(, $caller) = debug_backtrace(false, 0);
        $callerFunction = $caller['function'];
        $callerClass = (new \ReflectionClass($caller['class']))->getShortName();
        $callerClass = str_replace('Controller', '', $callerClass);
        $viewPath = "$callerClass/Views/$callerFunction.twig";
        return $this->view->render($this->response, $viewPath, $data);
    }
}