<?php

namespace PS\Web\Config;

class Db
{
    public function getMeta(){
        return [
            'entity_path' => [
                __DIR__.'/../../Domain'
            ],
            'auto_generate_proxies' => false,
            'proxy_dir' =>  __DIR__.'/../cache/proxies',
            'cache' => null
        ];
    }

    public function getConnection(){
        return [
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'dbname'   => 'polskiesolowki',
            'user'     => 'root',
            'password' => 'P@ssword1'
        ];
    }
}