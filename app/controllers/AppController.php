<?php

namespace app\controllers;

use app\models\AppModel;
use php_my_framework\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}