<?php

use Base\Route\RouteClass as Route;
use Base\Route\Router;

$router = new Router();

$router->push(new Route('/main', [\controllers\MainController::class, 'main']));

$router->getList();
die();
