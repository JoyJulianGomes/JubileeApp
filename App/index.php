<?php
echo "url=".$_GET['url'];

require_once 'Routes.php';

#autoloads the classes
function __autoload($classname)
{
    if (file_exists('./model/' . $classname . '.php')) {
        require_once './model/' . $classname . '.php';
    } elseif (file_exists('./controller/' . $classname . '.php')) {
        require_once './controller/' . $classname . '.php';
    } elseif (file_exists('./view/' . $classname . '.php')) {
        require_once './view/' . $classname . '.php';
    }
    elseif (file_exists('./view/filepicker/' . $classname . '.php')) {
        require_once './view/filepicker/' . $classname . '.php';
    }
}
