<?php
/**
 * Controller
 */

class CustomerlistController {
    public $title;

    public $customers = [
        [
            'id' => 3,
            'name' => 'Hans Müller',
            'plz' => '93894'
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

    function __construct () {

       require_once 'customerlist.template.php';
    }
}



