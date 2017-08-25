<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur;

use observateur\interfaces\IObservateur;
use observateur\interfaces\ISujet;

/**
 * Description of RobotOverlord
 *
 * @author simplon
 */
class RobotOverlord implements ISujet {
    private $temperature = 45;
    private $batterie = 100;
    private $humeur = 50;
    private $observateurs = [];
    
    public function asservirHumanite() {
        echo 'vive la destruction';
        $this->humeur += 25;
        $this->batterie -= 30;
        $this->temperature += 10;
        
        $this->notifierObservateurs();
    }
    
    public function recharger() {
        echo 'Overlord se branche à la prise';
        $this->temperature += 5;
        $this->batterie += 30;
        $this->humeur -= 25;
        
        $this->notifierObservateurs();
    }
    
    
    public function ajouterObservateur(IObservateur $observateur) {
        $this->observateurs[] = $observateur;
    }

    public function notifierObservateurs() {
        foreach($this->observateurs as $obs) {
            $obs->update($this->temperature, 
                    $this->batterie, 
                    $this->humeur);
        }
    }

    public function supprimerObservateur(IObservateur $observateur) {
        $found = array_search($observateur, $this->observateurs, true);
        if($found) {
            array_splice($this->observateurs, $found, 1);
        }
    }

}
