<?php

namespace app\controllers;

use php_my_framework\base\Controller;

class MainController extends AppController
{

    public function indexAction() {
        $this->setMeta('Главная страница', 'Описание', 'Ключевые слова');
        $this->set(['name' => 'Alex', 'age' => 21]);
    }

}