<?php

class RegisterView
{
    public static function render($args)
    {
        extract($args);
        require "./view/Register.php";
    }
}
