<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur;

use observateur\interfaces\IObservateur;
use strategie\Roomba;

/**
 * Description of RoombaTueur
 *
 * @author simplon
 */
class RoombaTueur extends Roomba implements IObservateur {
    
    public function update(int $temperature, int $batterie, int $humeur) {
        if($humeur <= 25) {
            echo "Le roomba extermine les occupant de la maison";
        }
    }

}
