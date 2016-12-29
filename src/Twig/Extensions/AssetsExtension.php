<?php


namespace PS\Twig\Extensions;

use Twig_SimpleFunction;

class AssetsExtension extends \Twig_Extension
{
    private $baseUrl;
    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('asset', array($this, 'getAssetUrl'))
        ];
    }

    public function getAssetUrl($url){
        return "$this->baseUrl/$url";
    }

    public function getName()
    {
        return 'assets';
    }
}