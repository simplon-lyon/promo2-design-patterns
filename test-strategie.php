<?php

use strategie\piece\Cuisine;
use strategie\piece\Salon;
use strategie\RobotCuistot;
use strategie\RobotMenager;
use strategie\Roomba;

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

$robotMenager = new RobotMenager();
$roomba = new Roomba();
$robotCuistot = new RobotCuistot();

$robotCuistot->effectuerTache();
$roomba->effectuerTache();
$robotMenager->effectuerTache();


$salon = new Salon();
$cuisine = new Cuisine();

$salon->autoriser($roomba);
$cuisine->autoriser($roomba);