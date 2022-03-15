<?php

namespace core;

include_once 'Request.php';

class Router
{
    public array $routes = [];

    public Request $request;

    private static $routerObject = null;

    public function __construct()
    {
        $this->request = new Request();
    }

    public static function getInstance()
    {
        if (!self::$routerObject) {
            self::$routerObject = new Router();
        }

        return self::$routerObject;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function execute()
    {
        $requestPath = $this->request->getRequestPath();
        $callbackObject = new $this->routes['get'][$requestPath][0];
        $callbackMethod = $this->routes['get'][$requestPath][1];

        call_user_func([$callbackObject, $callbackMethod]);
    }


    public function parseViewName()
    {

    }

    // tu ukve bolovdeba .php-it, mashin moashore
    public function renderTemplate($viewName)
    {
        $templatePath = $this->parseViewName("../templates/$viewName.php");

    }
}
