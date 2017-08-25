<?php

use observateur\RobotMenagerObservateur;
use observateur\RobotOverlord;
use observateur\RoombaTueur;
use observateur\SalonObservateur;
function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

$overlord = new RobotOverlord();

$roomba = new RoombaTueur();
$menager = new RobotMenagerObservateur();
$salon = new SalonObservateur();

$overlord->ajouterObservateur($roomba);
$overlord->ajouterObservateur($menager);
$overlord->ajouterObservateur($salon);

$overlord->asservirHumanite();
$overlord->asservirHumanite();
$overlord->asservirHumanite();
$overlord->recharger();
$overlord->recharger();
$overlord->recharger();


