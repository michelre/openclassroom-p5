<?php

use App\Routing\Router;

require_once("vendor/autoload.php");
require_once("src/routing/Router.php");

$loader = new Twig_Loader_Filesystem(__DIR__ . '/src/view');
$twig = new Twig_Environment($loader, array());

$router = new Router($twig);
$router->run();
