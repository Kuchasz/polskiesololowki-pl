<?php


namespace PS\Web\Config;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Tools\Setup;

class DoctrineFactory
{
    public static function create(){
        return function (){
            $dbConfig = new Db();

            $metaConfig = $dbConfig->getMeta();

            $config = Setup::createXMLMetadataConfiguration(
                $metaConfig['entity_path'],
                $metaConfig['auto_generate_proxies'],
                $metaConfig['proxy_dir'],
                $metaConfig['cache']
            );

            $driver = new XmlDriver(array(__DIR__ . '/../../Data/Maps'));

            $config->setMetadataDriverImpl($driver);

            return EntityManager::create($dbConfig->getConnection(), $config);
        };
    }
}