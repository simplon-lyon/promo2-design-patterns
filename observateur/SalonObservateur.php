<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur;

use observateur\interfaces\IObservateur;
use strategie\piece\Salon;

/**
 * Description of SalonObservateur
 *
 * @author simplon
 */
class SalonObservateur extends Salon implements IObservateur{
    
    public function update(int $temperature, int $batterie, int $humeur) {
        if($batterie < 45) {
            echo 'Le salon rend ses prises accessibles à Overlord';
        }
    }

}
