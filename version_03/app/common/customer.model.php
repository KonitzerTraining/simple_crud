<?php

require_once '../lib/interfaces/ServiceModel.php';
require_once '../lib/classes/Db.php';

class CustomerModel extends Db implements ServiceModel
{
   public function getCustomers ()  {
       return [
           [
               'id' => 3,
               'name' => 'Hans Müller',
               'plz' => '444'
           ],
           [
               'id' => 4,
               'name' => 'Peter Müller',
               'plz' => '07898'
           ],
           [
               'id' => 5,
               'name' => 'Hans-Mayer Müller',
               'plz' => '23423'
           ]
       ];
   }

    function get(...$id)
    {
        $data = null;
        if(count($id) > 0) {
            $data = $this->getOne('customer', $id[0]);
        } else {
            $data = $this->getAll('customer');
        }
        // TODO: Implement get() method.
        return $data;
    }

    function post()
    {
        // TODO: Implement post() method.
    }

    function put()
    {
        // TODO: Implement put() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }
}


