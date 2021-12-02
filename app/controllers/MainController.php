<?php

namespace app\controllers;

use php_my_framework\base\Controller;
use php_my_framework\Cache;

class MainController extends AppController
{

    public function indexAction() {
        $posts = \R::findAll('test');
        $cache = Cache::instance();
        //$cache->delete('test');
        $data = $cache->get('test');
        if (!$data) {
            $cache->set('test', $posts);
        }
        debug($data);
        $this->setMeta('Главная страница', 'Описание', 'Ключевые слова');
        $this->set(['name' => 'Alex', 'age' => 21, 'posts' => $posts]);
    }

}