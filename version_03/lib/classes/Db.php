<?php
/**
 * Created by PhpStorm.
 * User: Marcus Konitzer
 * Date: 08.11.2018
 * Time: 13:18
 */

class Db
{

    private $dbh;
    function __construct () {
        echo 'DB';

        $this->dbh = new PDO('mysql:host=localhost;dbname=littlecrm', 'root', '');

    }
    function __destruct()
    {
        $this->dbh = null;
    }

    function getAll ($table) {
        $data = [];
        $result = $this->dbh->query("SELECT * from $table");

        foreach ($result as $row) {
            $data[] = $row;
        }

        return $data;
    }
    function getOne ($table, $id) {

    }

    function deleteOne ($table, $id) {

    }

    function createOne($table, $data) {

    }



}