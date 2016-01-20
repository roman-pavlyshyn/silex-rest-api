<?php

return array(
    'baseUrl' => '',
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'silexrest',
        'user' => 'root',
        'password' => 'password',
        'charset' => 'utf8',
    ),
    'orm.proxies_dir' => '%app.path%/app/cache/Doctrine/Proxies',
    'orm.default_cache' => 'xcache',
    'orm.em.options' => array(
        'mappings' => array(
            array(
                'type' => 'annotation',
                'namespace' => 'Products\Entity',
                'alias' => 'api',
                'path' => '%app.path%/src/Products/Entity',
                'use_simple_annotation_reader' => false
            )
        )
    ),
    'app.path' => '%app.path%',
    'cache.path' => '%app.path%/app/cache',
    'log.path' => '%app.path%/app/logs',
    'serializer.cache.path' => '%app.path%/app/cache/serializer'
);
