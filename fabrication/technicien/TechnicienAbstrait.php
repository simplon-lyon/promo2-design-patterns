<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabrication\technicien;

use fabriqueabstraite\IFabrique;

/**
 * Description of TechnicienAbstrait
 *
 * @author simplon
 */
abstract class TechnicienAbstrait {
    
    protected abstract function creerFabrique():IFabrique;
    
    public function livrer() {
        $fabrique = $this->creerFabrique();
        $cuisine = $fabrique->creerCuisine();
        $cuistot = $fabrique->creerCuistot();
//        $cuistot->communiquer();
        $cuisine->autoriser($cuistot);
        $cuistot->effectuerTache();
        
        $salon = $fabrique->creerSalon();
        $menager = $fabrique->creerMenager();
        $salon->autoriser($menager);
        $menager->effectuerTache();
    }
}
