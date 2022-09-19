<?php

namespace app\controllers;

use core\Controller;

class UserController extends Controller
{
    public function __construct($route = [])
    {
        $this->route = $route;
    }
}