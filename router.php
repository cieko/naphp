<?php
class Router {
    private $routes = [];

    public function add($path, $file) {
        $this->routes[$path] = $file;
    }

    public function route($uri) {
        $uri = strtok($uri, '?');

        if (array_key_exists($uri, $this->routes)) {
            require $this->routes[$uri];
        } else {
            require 'controllers/404.php'; 
        }
    }
}
?>
