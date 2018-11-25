<?php
require_once('Routes.php');

#autoloads the classes
function __autoload($classname){
    if(file_exists('./model/'.$classname.'.php')){
        require_once './model/'.$classname.'.php';
    } elseif(file_exists('./controller/'.$classname.'.php')){
        require_once './controller/'.$classname.'.php';
    }
}