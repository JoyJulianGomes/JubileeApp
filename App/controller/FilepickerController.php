<?php

class FilepickerController extends BaseController
{
    private $vars = array();

    public function set($a)
    {
        $this->vars = array_merge($this->vars, $a);
    }

    public function createView($view_name = null)
    {
        FilepickerView::render($this->vars);
    }

    public function indexAction()
    {
        $this->createView();
    }
}
