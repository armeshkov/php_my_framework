<?php

namespace php_my_framework;

class Router
{

    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                debug($matches);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function dispatch($url) {
        if (self::matchRoute($url)) {
            echo 'OK';
        } else {
            throw new \Exception('Страница не найдена', 404);
        }
    }
}