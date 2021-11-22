<?php

namespace php_my_framework\base;

use php_my_framework\Db;

abstract class Model
{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct(){
        Db::instance();
    }


}