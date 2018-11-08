<?php
/**
 * Controller
 */
require_once '../app/common/customer.model.php';

class CustomerlistController {
    public $title;

    public $customers;

    function __construct () {
       $this->customerModel = new CustomerModel();
       $this->getCustomers();

       require_once 'customerlist.template.php';

    }

    function getCustomers () {
        $this->customers = $this->customerModel->get();

        //print_r($this->customerModel->getOne('customer', 2 ));

        //$this->customerModel->post();
    }


}



