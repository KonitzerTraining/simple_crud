<?php
require_once 'TextBlock.php';

class MainController {
    public $title;

    function __construct () {
       $this->title = TextBlock::getTextFromId('001');
    }
}

$controller = new MainController();
require_once 'main.template.php';


