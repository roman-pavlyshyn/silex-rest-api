<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

chdir(dirname(__DIR__));

$loader = require_once 'vendor/autoload.php';

$app = new Application();
$cli = false;

$app['debug'] = true;

require_once('app/bootstrap.php');

if (true !== $app['debug']) {
    $app->error(function (\Exception $e, $code) use ($app) {
        if (404 === $code) {
            return;
        }
        return new JsonResponse(array('application error'));
    });
}

$app->run();
