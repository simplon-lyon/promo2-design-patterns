<?php

use adaptateur\Humain;
use commande\action\CommandeComRobot;
use commande\action\CommandeHumainYoutube;
use commande\action\CommandeTacheRobot;
use commande\Telecommande;
use strategie\RobotCuistot;

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');


$robot = new RobotCuistot();
$humain = new Humain('johnson', 'john');

$telecommande = new Telecommande();
$telecommande->ajouterAction(new CommandeTacheRobot($robot));
$telecommande->ajouterAction(new CommandeComRobot($robot));
$telecommande->ajouterAction(new CommandeHumainYoutube($humain));

$telecommande->actionnerBtn(0);
$telecommande->actionnerBtn(1);
$telecommande->actionnerBtn(2);

$telecommande->btnAnnuler();
$telecommande->btnAnnuler();
$telecommande->btnAnnuler();

