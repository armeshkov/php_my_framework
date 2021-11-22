<?php

namespace app\controllers;

use php_my_framework\base\Controller;

class MainController extends AppController
{

    public function indexAction() {
        $posts = \R::findAll('test');
        $post = \R::findAll('test', 'id = ?', [2]);
        debug($post);
        $this->setMeta('Главная страница', 'Описание', 'Ключевые слова');
        $this->set(['name' => 'Alex', 'age' => 21, 'posts' => $posts]);
    }

}