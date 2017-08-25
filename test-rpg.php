<?php

use observateur\rpg\BoutonDegat;
use observateur\rpg\BoutonSoigner;
use observateur\rpg\Hero;
use observateur\rpg\HpBar;
use observateur\rpg\MpBar;

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    require($class . '.php');
}

spl_autoload_register('myLoader');

session_start();
if (empty($_SESSION['hero'])) {
    $hero = new Hero();
} else {
    $hero = $_SESSION['hero'];
}
$hero->ajouterObservateur(new HpBar());
$hero->ajouterObservateur(new MpBar());
$hero->ajouterObservateur(new BoutonDegat());
$hero->ajouterObservateur(new BoutonSoigner());
$hero->notifierObservateurs();

if (filter_input(INPUT_GET, 'action') == 'degat') {
    $hero->prendreDegat();
}

if (filter_input(INPUT_GET, 'action') == 'soigner') {
    $hero->seSoigner();
}

$_SESSION['hero'] = $hero;
?>
<style>
    .barre {
        width: 200px;
        height: 50px;
        border: 1px solid black;
        background-color: white;
    }
    .barre .lvl {
        height: 100%;
    }
    .barre .mp {
        background-color: blue;
    }
    .barre .hp {
        background-color: red;
    }
</style>
