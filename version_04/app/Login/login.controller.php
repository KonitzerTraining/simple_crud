<?php
/**
 * Controller
 */


class LoginController {
    public $title;

    function __construct () {

       $this->info ='Hallo';
       require_once 'login.template.php';
    }
}



