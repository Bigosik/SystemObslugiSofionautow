<?php

namespace UserFrosting\Sprinkle\Page\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use UserFrosting\Sprinkle\Core\Controller\SimpleController;

class PageController extends SimpleController
{
    public function pageMembers(Request $request, Response $response, array $args)
    {
        return $this->ci->view->render($response, 'pages/trip.html.twig');
    }
}
