<?php

namespace core;

class Request
{
    public function isGet()
    {

    }

    public function isPost()
    {

    }

    public function getRequestPath()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
