<?php

/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\App\Controller;

use Psr\Http\Message\ResponseInterface as Response;

/**
 * CoreController Class.
 *
 * Implements some common sitewide routes.
 * 
 * N.B.: THIS FILE IS SAFE TO EDIT OR DELETE.
 */
class AppController
{
    /**
     * Renders the default home page for UserFrosting.
     * By default, this is the page that non-authenticated users will first see when they navigate to your website's root.
     * Request type: GET.
     * 
     * @param Response $response
     */
    public function pageIndex(Response $response): Response
    {
        // return $this->ci->view->render($response, 'pages/index.html.twig');
        $response->getBody()->write('Hello world !');

        return $response;
    }

    /**
     * Renders a sample "about" page for UserFrosting.
     * Request type: GET.
     *
     * @param Response $response
     */
    public function pageAbout(Response $response): Response
    {
        return $this->ci->view->render($response, 'pages/about.html.twig');
    }

    /**
     * Renders terms of service page.
     * Request type: GET.
     * 
     * @param Response $response
     */
    public function pageLegal(Response $response): Response
    {
        return $this->ci->view->render($response, 'pages/legal.html.twig');
    }

    /**
     * Renders privacy page.
     * Request type: GET.
     *
     * @param Response $response
     */
    public function pagePrivacy(Response $response): Response
    {
        return $this->ci->view->render($response, 'pages/privacy.html.twig');
    }
}