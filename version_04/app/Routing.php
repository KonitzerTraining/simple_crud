<?php
/**
 * Created by PhpStorm.
 * User: Marcus Konitzer
 * Date: 08.11.2018
 * Time: 09:53
 */

class Routing
{
    function __construct()
    {
        if(key_exists('logout', $_POST)) {
                session_destroy();
        }
    }

    private static $routes = [
        'start' => 'Main',
        'new' => 'CustomerNew',
        'customer' => 'Customerlist'
    ];
    private static $loginRoute = 'Login';


    public function route()
    {
        if (empty ($_SESSION['login'])) {

            $ctrlPath = static::$loginRoute;

        } elseif (
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

