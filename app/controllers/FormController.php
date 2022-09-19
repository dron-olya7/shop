<?php

namespace app\controllers;

use core\Controller;
use RedBeanPHP\R;

class FormController extends Controller
{
    public function authAction() {
        $res = R::findAll('names');
        $data = [];
        foreach ($res as $name) {
            $data[$name->id] = $name->name;
        }
        $this->setData(['name' => 'Admin', 'birthdate' => '08.06.1992']);
        $this->setMeta('Форма авторизации','Описание страницы формы авторизации','Форма, авторизация...');
    }
}