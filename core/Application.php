<?php

namespace core;

include_once 'Router.php';

class Application
{
    public Router $router;

    public function __construct()
    {
        $this->router = Router::getInstance();
    }

    public function run()
    {
        $this->router->execute();
    }
}
