<?php
/**
 * Created by PhpStorm.
 * User: Marcus Konitzer
 * Date: 08.11.2018
 * Time: 11:54
 */

interface ServiceModel
{
    function get ();
    function post ($data);
    function put ();
    function delete ();
}