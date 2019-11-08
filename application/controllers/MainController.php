<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $vars = [
            'name' => 'Вася',
            'age' => 33
        ];
        $this->view->render('Главная страница', $vars);
    }
    
}