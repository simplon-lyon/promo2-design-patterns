<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace commande\action;

use strategie\Robot;

/**
 * Description of CommandeComRobot
 *
 * @author simplon
 */
class CommandeComRobot implements ICommande{
    
    private $robot;
    
    public function __construct(Robot $robot) {
        $this->robot = $robot;
    }
    
    public function executer() {
        $this->robot->communiquer();
    }

    public function annuler() {
        $this->robot->arret();
    }

}
