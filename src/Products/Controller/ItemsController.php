<?php

namespace Products\Controller;

use MJanssen\Controller\RestController;
use MJanssen\Controller\RestControllerInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RestController
 * @package Products\Controller
 * 
 */
class ItemsController extends RestController implements RestControllerInterface {

    /**
     * 
     */
    public function getAction(Request $request, Application $app, $id) {
        return new JsonResponse(
                $this->get($app, $id)
        );
    }

    /**
     * 
     */
    public function getCollectionAction(Request $request, Application $app) {
        return new JsonResponse(
                $this->getCollection($app)
        );
    }

    /**
     * 
     */
    public function deleteAction(Request $request, Application $app, $id) {
        if ($this->delete($app, $id)) {
            return new Response('', 204);
        }
    }

    /**
     * 
     */
    public function postAction(Request $request, Application $app) {
        return new JsonResponse(
                $this->post($app)
        );
    }

    /**
     * 
     */
    public function putAction(Request $request, Application $app, $id) {
        return new JsonResponse(
                $this->put($app, $id)
        );
    }

}
