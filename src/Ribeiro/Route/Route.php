<?php

namespace Ribeiro\Route;

class Route{

    static private $url;
    static private $route;

    static public function getRoute(){
        self::$url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

        self::$route = explode('/', self::$url['path']);
        return self::$route;
    }
}