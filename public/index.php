<?php
require_once '/var/www/config/init.php';
require_once LIBS . '/functions.php';

new \php_my_framework\App();

throw new Exception('Страница не найдена', 500);
