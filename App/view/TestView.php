<?php

class TestView
{
    public static function render($args)
    {
        extract($args);
        require "./view/Test.php";
    }
}
