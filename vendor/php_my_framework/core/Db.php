<?php

namespace php_my_framework;

class Db
{

    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!\R::testConnection()) {
            throw new \Exception("Нет соединения с БД", 500);
        } else {
            echo "Соединение установлено";
        }
        \R::freeze(true);
        if(DEBUG) {
            \R::debug(true, 1);
        }
    }
}