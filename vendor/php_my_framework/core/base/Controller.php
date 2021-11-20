<?php

namespace php_my_framework\base;

abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $layout;
    public $data = [];
    public $meta = ['title' => '', 'disc' => '', 'keywords' => ''];

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->public = $route['prefix'];
    }

    public function getView() {
        $viewObject = new View($this->route, $this->meta, $this->layout, $this->view);
        $viewObject->render($this->data);
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