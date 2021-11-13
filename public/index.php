<?php
require_once '/var/www/config/init.php';
require_once LIBS . '/functions.php';

new \php_my_framework\App();
debug(\php_my_framework\App::$app->getProperties());