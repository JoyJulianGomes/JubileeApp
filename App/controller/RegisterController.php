<?php

class RegisterController extends BaseController
{
    private $vars = array();

    public function set($a)
    {
        $this->vars = array_merge($this->vars, $a);
    }

    public function createView($view_name = null)
    {
        require_once "./view/RegisterView.php";
        RegisterView::render($this->vars);
    }

    public function indexAction()
    {
        $batch["batch"] = [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012];
        $this->set($batch);
        $this->createView();
    }
}
