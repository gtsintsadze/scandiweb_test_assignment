<?php

include_once 'core\Router.php';
include_once 'controllers\Index.php';

$router = \core\Router::getInstance();

$router->get('/index', [\controllers\Index::class, 'index']);
$router->get('/add_product', [\controllers\Index::class, 'add_product']);