<?php

class TestController extends BaseController
{

    private $vars = ["a" => "a", "b" => "b"];

    public function set($a)
    {
        $this->vars = array_merge($this->vars, $a);
    }

    public function createView($view_name = null)
    {
        TestView::render($this->vars);
    }

    public function indexAction()
    {
        $this->createView();
    }
}
