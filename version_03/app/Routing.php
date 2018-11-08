<?php
/**
 * Created by PhpStorm.
 * User: Marcus Konitzer
 * Date: 08.11.2018
 * Time: 09:53
 */

class Routing
{
    private static $routes = [
        'start' => 'Main',
        'customer' => 'Customerlist'
    ];

    public function route()
    {
        if (
            array_key_exists('page', $_GET) AND
            array_key_exists($_GET['page'], static::$routes)
        ) {
            $ctrlPath = static::$routes[$_GET['page']];
        } else {
            $ctrlPath = 'main';
        }
        return $ctrlPath;
    }
}

