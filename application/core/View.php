<?php

namespace application\core;

class View 
{
    public $path;
    public $route;
    public $layout = 'default';
    
    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
        //debug($this->path);
    }
    
    public function render($title, $vars = [])
    {
        $content_path = 'application/views/' . $this->path . '.php';
        if (file_exists($content_path)) {
            ob_start();
            require $content_path;
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        } else {
            echo 'Вид не найден: ' . $this->path;
        }
        
    }
    
}
