<?php
class BaseController{
    public function createView($view_name){
        // require_once('./view/'.$view_name.'.html');
        require_once('./view/'.$view_name.'.html');
    }
}