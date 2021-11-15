<?php

use php_my_framework\Router;

require_once '/var/www/config/init.php';
require_once LIBS . '/functions.php';

new \php_my_framework\App();

$query = rtrim($_SERVER['REQUEST_URI'], '/');

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
Router::dispatch($query);