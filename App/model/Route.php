<?php
class Route{
    public static $validroutes = array();

    public static function set($route, $function){
        array_push(self::$validroutes,$route);
        if($_GET['url']==$route){
            $function->__invoke();
        }
    }
}