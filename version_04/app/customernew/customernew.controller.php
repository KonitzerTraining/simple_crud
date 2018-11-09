<?php
/**
 * Controller
 */
require_once '../app/common/customer.model.php';

class CustomerNewController
{
    public $title;
    public $status = 0;
    public $customers;

    function __construct()
    {
        $this->customerModel = new CustomerModel();

        if (sizeof($_POST) > 0) {
            $this->validate();
        }

        require_once 'customernew.template.php';
    }

    function __get($session_variable) {
        if(key_exists($session_variable, $_SESSION)) {
            return $_SESSION[$session_variable];
        } else {
            return '';
        }
    }

    private function validate()
    {
        echo 'validiere';

        $name = $_POST['name'];
        $plz = $_POST['plz'];

        // DB-Restriktionen beachten!
        // $name
        if (strlen($name) < 3 OR strlen($name) > 255) {
            $this->status = 1;
            unset($_SESSION['name']);
        } else {
            $_SESSION['name'] = $name;
        }

        if (strlen($plz) !== 5 ) {
            $this->status = 1;
            unset($_SESSION['plz']);
        } else {
            $_SESSION['plz'] = $plz;
        }

        // Achtung: URL-Parameter sind immer String

        if($this->status === 0) {

            $this->customerModel->post($_POST);
            $this->status = 2;

            unset($_SESSION['name']);
            unset($_SESSION['plz']);

        }

    }

}



