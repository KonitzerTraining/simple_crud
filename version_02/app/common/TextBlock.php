<?php
/*
 * Model
 * */
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