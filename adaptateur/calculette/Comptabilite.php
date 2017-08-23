<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adaptateur\calculette;

/**
 * Description of Comptabilite
 *
 * @author simplon
 */
class Comptabilite {
    private $calculette;
    
    public function __construct(ICalculette $calculette) {
        $this->calculette = $calculette;
    }
    
    public function faireLaCompta() {
        $CA = 100000;
        $nbEmployes = 5;
        $salaireEmploye = 2500;
        $salaires = $this->calculette->calculer($nbEmployes, $salaireEmploye, '*');
        
        $benefices = $this->calculette->calculer($CA, $salaires, '-');
        
        echo 'Le total des salaires est ' . $salaires . '€ et les '
                . 'bénéfices de la boîte sont de ' . $benefices . '€';
        
    }
}
