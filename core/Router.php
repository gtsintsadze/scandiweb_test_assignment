<?php

namespace core;

class Router
{
    public $routes = [];

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
        $callbackObject = new $this->routes['get']['/test'][0];
        $callbackMethod = $this->routes['get']['/test'][1];

        call_user_func([$callbackObject, $callbackMethod]);
    }
}
