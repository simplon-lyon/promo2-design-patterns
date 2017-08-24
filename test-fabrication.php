<?php

use fabrication\technicien\TechnicienSimpleFactory;

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

//$fabricationViennois = new CafeViennois();
//
//$fabricationViennois->servirViennois();

$technicien = TechnicienSimpleFactory::creerTechnicien('particulier');
$technicien->livrer();