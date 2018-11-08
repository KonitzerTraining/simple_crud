<?php
/**
 * Created by PhpStorm.
 * User: Marcus Konitzer
 * Date: 08.11.2018
 * Time: 13:18
 */

class Db
{

    function __construct () {
        echo 'DB';

        $dbh = new PDO('mysql:host=localhost;dbname=littlecrm', 'root', '');

        $result = $dbh->query('SELECT * from customer');

        foreach ($result as $row) {
            print_r($row);
        }
        $dbh = null;
    }



}