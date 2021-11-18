<?php

namespace php_my_framework\base;

abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $data = [];
    public $meta = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->public = $route['prefix'];
    }

    public function set($data) {
        $this->data =$data;
    }

    public function setMeta($title = '', $disc = '', $keywords = '') {
        $this->meta['title'] = $title;
        $this->meta['disc'] = $disc;
        $this->meta['keywords'] = $keywords;
    }

}