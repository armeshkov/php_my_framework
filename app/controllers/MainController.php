<?php

namespace app\controllers;

use php_my_framework\base\Controller;

class MainController extends AppController
{

    public function indexAction() {
        debug($this->route);
        debug($this->controller);
    }

}