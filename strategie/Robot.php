<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie;

use strategie\tache\ITache;

/**
 * Description of Robot
 *
 * @author simplon
 */
abstract class Robot {
    private $tache;
    private $communication;
    
    public function __construct(ITache $tache) {
        $this->tache = $tache;
    }
    
    public function effectuerTache() {
        $this->tache->executer();
    } 
    
    public function communiquer() {
        $this->communication->communiquer();
    }
}
