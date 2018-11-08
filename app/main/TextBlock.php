<?php
/**
 * Created by PhpStorm.
 * User: Marcus Konitzer
 * Date: 08.11.2018
 * Time: 09:28
 */

class TextBlock
{
    static $text = [
        '001' => 'Little CRM',
        '002' => 'Willkommen'
    ];

    static public function getTextFromId($id)
    {
        return static::$text[$id];
    }
}