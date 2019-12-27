<?php

class Controller_logout extends Controller
{
    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
        if ($_SESSION["auth_ok"]) {
            $_SESSION["auth_ok"] = false;
            unset($_SESSION["auth_login"]);
        }
        $this->view->generate("main_view.php", 'template_view.php');
    }
}