<?php
/**
 * Controller
 */


class LoginController
{
    public $title;
    public $status = 0;

    function __construct()
    {

        $this->info = 'Hallo';

        if (key_exists('user', $_POST)) {
            $this->login();
        }

        require_once 'login.template.php';
    }

    private function login()
    {
        $loginStatus = true;

        $this->status = 0;
        $theUser = 'A';
        $thePassword = '123';

        $usr = isset($_POST['user']) ? $_POST['user'] : '';
        $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : '';

        if ($usr !== $theUser) {
            $loginStatus = false;
        }

        if ($pwd !== $thePassword) {
            $loginStatus = false;
        }

        if ($loginStatus === false) {
            $this->status = 1;
        } elseif ($loginStatus === true) {
            $this->status = 2;
        }


        if ($this->status === 2) {
            $_SESSION['login'] = $usr;
        }
    }
}



