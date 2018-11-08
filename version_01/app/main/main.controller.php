<?php
/**
 * Controller
 */
require_once '../app/common/TextBlock.php';

class MainController {
    public $title;

    function __construct () {
       $this->title = TextBlock::getTextFromId('001');
       $this->welcome = TextBlock::getTextFromId('002');
    }
}

$controller = new MainController();
require_once 'main.template.php';


