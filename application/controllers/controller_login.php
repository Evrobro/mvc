<?php

class Controller_login extends Controller
{
    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate("login_view.php", 'template_view.php');
    }

    function action_personal()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$_SESSION["auth_ok"]) {
            $data = $this->model->Login($_POST['ml'], $_POST['pswrd']);
            $this->view->generate('login_view.php', 'template_view.php', $data);
        } else
            $this->view->generate('main_view.php', 'template_view.php');
    }
}