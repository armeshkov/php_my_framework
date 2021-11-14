<?php

use php_my_framework\Router;

require_once '/var/www/config/init.php';
require_once LIBS . '/functions.php';

new \php_my_framework\App();

Router::add('posts/add', ['controller' => 'posts', 'action' => 'add']);
debug(Router::getRoutes());
