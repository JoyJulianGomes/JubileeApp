<?php
class Route
{
    public static $validroutes = array();
    private static $deafult_route;

    public static function set($route, $function)
    {
        self::$validroutes[$route] = $function;
    }

    public static function setDefault($route)
    {
        if (array_key_exists("$route", self::$validroutes)) {
            self::$deafult_route = self::$validroutes[$route];
        }
    }

    public static function action($route)
    {
        if (self::$validroutes["$route"] ?? null) {
            self::$validroutes["$route"]();
        } else {
            self::$deafult_route->__invoke();
        }
    }
}
