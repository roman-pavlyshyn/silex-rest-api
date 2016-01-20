<?php

$regex = array();
$regex['string'] = '^[a-z\-]+$';
$regex['id'] = '^[\d]+$';

return array(
    'config.routes' => array(
        array(
            'pattern' => '%baseUrl%/api/items/{id}',
            'controller' => 'Products\Controller\ItemsController::resolveAction',
            'method' => array(
                'get', 'put', 'delete'
            ),
            'assert' => array(
                'id' => $regex['id']
            ),
            'value' => array(
                'namespace' => 'api',
                'entity' => 'items'
            )
        ),
        array(
            'pattern' => '%baseUrl%/api/items',
            'controller' => 'Products\Controller\ItemsController::resolveAction',
            'method' => array(
                'get', 'post'
            ),
            'value' => array(
                'namespace' => 'api',
                'entity' => 'items'
            )
        ),
        array(
            'pattern' => '%baseUrl%/api/categories/{id}',
            'controller' => 'Products\Controller\CategoriesController::resolveAction',
            'method' => array(
                'get', 'put', 'delete'
            ),
            'assert' => array(
                'id' => $regex['id']
            ),
            'value' => array(
                'namespace' => 'api',
                'entity' => 'categories'
            )
        ),
        array(
            'pattern' => '%baseUrl%/api/categories',
            'controller' => 'Products\Controller\CategoriesController::resolveAction',
            'method' => array(
                'get', 'post'
            ),
            'value' => array(
                'namespace' => 'api',
                'entity' => 'categories'
            )
        )
    )
);
