<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

use singleton\Singleton;

$singleton = Singleton::getInstance();

$singleton->count();
$singleton->count();

$singleton2 = Singleton::getInstance();

$singleton2->count();
$singleton2->count();