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

    function __construct()
    {
        echo 'DB';

        $this->dbh = new PDO('mysql:host=localhost;dbname=littlecrm', 'root', '');

    }

    function __destruct()
    {
        $this->dbh = null;
    }

    function getAll($table)
    {
        $data = [];
        $result = $this->dbh->query("SELECT * from $table");

        foreach ($result as $row) {
            $data[] = $row;
        }

        return $data;
    }

    function getOne($table, $id)
    {
        $data = [];

        $result = $this->dbh->query("SELECT * from $table WHERE id = $id");

        foreach ($result as $row) {
            $data[] = $row;
        }

        return $data[0];
    }

    function deleteOne($table, $id)
    {

    }

    function createOne($table, $data)
    {
        $fieldNames = [];
        $fieldValues = [];

        foreach ($data as $field => $value) {
            $fieldNames[] = $field;

            $value = (is_string($value)) ? "'$value'" : $value;
            $fieldValues[] = $value;
        }

        $query = "INSERT INTO $table (";
        $query .= implode(', ', $fieldNames);
        $query .= ") VALUES (";
        $query .= implode(', ', $fieldValues);
        $query .= ")";

        $this->dbh->query($query);
    }


}