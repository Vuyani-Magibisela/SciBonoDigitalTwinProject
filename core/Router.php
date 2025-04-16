<?php
namespace Core;

class Router{

    private $routes = [];

    /**
     * Add a route to the routing table
     * 
     * @param string %route The route URL
     * @param array $params Controller, action, etc
     */
    public function add($route, $params = []){
        // Convert route to a regular expression
        $route = preg_replace('/\//', '\\/', $remote);
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)');
    }

}