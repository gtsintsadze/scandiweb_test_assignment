<?php

namespace controllers;

require_once "..\core\Router.php";

class Index extends \core\Router
{
    public function index()
    {
        require_once '../templates/index.php';
//        return $this->renderTemplate('index');
    }

    public function add_product()
    {
        require_once '../templates/pages/add_product.php';
    }
}
