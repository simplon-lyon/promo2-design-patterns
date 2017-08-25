<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\rpg;

use observateur\interfaces\IObservateurRpg;
use observateur\interfaces\ISujetRpg;

/**
 * Description of Hero
 *
 * @author simplon
 */
class Hero implements ISujetRpg {
    private $hp = 100;
    private $mp = 100;
    
    public function prendreDegat() {
        $this->hp -= 25;
        $this->notifierObservateurs();
    }
    
    public function seSoigner() {
        $this->hp += 25;
        $this->mp -= 25;
        $this->notifierObservateurs();
    }

    public function ajouterObservateur(IObservateurRpg $observateur) {
        $this->observateurs[] = $observateur;
    }

    public function notifierObservateurs() {
        foreach($this->observateurs as $obs) {
            $obs->update($this->hp, $this->mp);
        }
    }

    public function supprimerObservateur(IObservateurRpg $observateur) {
        $found = array_search($observateur, $this->observateurs, true);
        if($found) {
            array_splice($this->observateurs, $found, 1);
        }
    }

}
