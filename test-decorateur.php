<?php

use decorateur\logger\LoggerFile;
use decorateur\logger\LoggerHTML;
use strategie\piece\Salon;
use strategie\RobotCuistot;

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

//use decorateur\Chocolat;
//use decorateur\supplement\Chantilly;
//use decorateur\supplement\LaitSoja;
//
//$chocolat = new Chocolat();
//
//echo $chocolat->getDescription() . ' à ' . $chocolat->getPrix() . '€';
//
//echo '<br/>';
//$chocoChantilly = new Chantilly($chocolat);
//echo $chocoChantilly->getDescription() . ' à ' . $chocoChantilly->getPrix() . '€';
//echo '<br/>';
//$chocoChantillySoja = new LaitSoja($chocoChantilly);
//echo $chocoChantillySoja->getDescription() . ' à ' . $chocoChantillySoja->getPrix() . '€';


$salon = new Salon();
$salonLogHtml = new LoggerFile(new LoggerHTML($salon));

$cuistot = new RobotCuistot();

$salonLogHtml->autoriser($cuistot);
