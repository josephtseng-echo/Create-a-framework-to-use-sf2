<?php
// /src/app.php
 
use Symfony\Component\Routing;
 
$routes = new Routing\RouteCollection();
$routes->add('front_default11', new Routing\Route('/isleapyear/{year}', array(
    'year' => null,
    '_controller' => 'Work\\Controller\\FrontDefaultController::testAction'
)));
$routes->add('front_default', new Routing\Route('/', array(
    '_controller' => 'Work\\Controller\\FrontDefaultController::indexAction'
)));
return $routes;