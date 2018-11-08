<?php
/**
 * Controller
 */
require_once '../app/common/customer.model.php';

class CustomerNewController {
    public $title;

    public $customers;

    function __construct () {
       $this->customerModel = new CustomerModel();

       require_once 'customernew.template.php';
    }

}



