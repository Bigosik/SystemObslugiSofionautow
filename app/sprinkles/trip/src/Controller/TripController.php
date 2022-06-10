<?php

namespace UserFrosting\Sprinkle\Trip\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use UserFrosting\Sprinkle\Core\Controller\SimpleController;

class TripController extends SimpleController
{
    public function pageTrip(Request $request, Response $response, array $args)
    {
        return $this->ci->view->render($response, 'pages/trip.html.twig');
    }
}
