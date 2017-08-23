<?php

use adaptateur\Humain;
use adaptateur\HumainRobotAdaptateur;
use strategie\piece\Cuisine;

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

$cuisine = new Cuisine();
$jean = new Humain('demel', 'jean');
$adapateur = new HumainRobotAdaptateur($jean);

$cuisine->autoriser($adapateur);
$adapateur->effectuerTache();
