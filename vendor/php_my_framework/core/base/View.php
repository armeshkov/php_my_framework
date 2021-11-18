<?php

namespace php_my_framework\base;

class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout
    public $data = [];
    public $meta = [];

    public function __construct($route, $layout = '', $view = '', $meta) {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->public = $route['prefix'];
        $this->meta = $meta;
        if ($layout) {
            if ($layout === fasle) {
                $this->layout = false;
            } else {
                $this->layout = $layout ?: LAYOUT;
            }
        }
    }


}