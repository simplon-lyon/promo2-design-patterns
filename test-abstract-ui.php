<?php

use fabriqueabstraite\ui\PageProduit;
session_start();

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

$_SESSION = ['user' => ['rights' => 1]];

$page = new PageProduit();
$page->drawUi();