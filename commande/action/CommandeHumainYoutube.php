<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace commande\action;

use adaptateur\Humain;

/**
 * Description of CommandeHumainYoutube
 *
 * @author simplon
 */
class CommandeHumainYoutube implements ICommande{
    private $humain;
    
    function __construct(Humain $humain) {
        $this->humain = $humain;
    }

    public function executer() {
        echo $this->humain->allerSurYoutube();
    }

    public function annuler() {
        echo $this->humain->faireDodo();
    }

}
