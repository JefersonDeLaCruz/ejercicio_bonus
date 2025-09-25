<?php

namespace lib;

class Route
{
    private static $routes = [];
    private static $URL_BASE = "/mvc/public";



    public static function get($url, $callback)
    {
        self::$routes["GET"][self::$URL_BASE . $url] = $callback;
    }

    public static function post($url, $callback)
    {
        self::$routes["POST"][self::$URL_BASE . $url] = $callback;
    }

    public static function dispatch(){
        $uri = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];
    
        

        foreach (self::$routes[$method] as $url=>$funcion) {
            if ($uri == $url ) {
                
                $funcion();
                return;
            }
        }
        echo "404";
    }

}


?>
