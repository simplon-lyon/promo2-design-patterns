<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur;

use observateur\interfaces\IObservateur;
use strategie\RobotMenager;

/**
 * Description of RobotMenagerObservateur
 *
 * @author simplon
 */
class RobotMenagerObservateur extends RobotMenager implements IObservateur{
    
    
    public function update(int $temperature, int $batterie, int $humeur) {
        if($temperature > 80) {
            echo "Le robot ménager jette son seau d'eau sur l'Overlord";
        }
    }

}
