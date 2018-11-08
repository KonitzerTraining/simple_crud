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

    private function validate()
    {
        echo 'validiere';

        $name = $_POST['name'];
        $plz = $_POST['plz'];

        // DB-Restriktionen beachten!
        if (strlen($name) < 3 OR strlen($name) > 255) {
            $this->status = 1;
        }

        if (strlen($plz) !== 5 ) {
            $this->status = 1;
        }

        // Achtung: URL-Parameter sind immer String

        if($this->status === 0) {

            $this->customerModel->post($_POST);
            $this->status = 2;

        }

    }

}



