<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabrication\technicien;

use fabriqueabstraite\FabriqueParticulier;
use fabriqueabstraite\IFabrique;

/**
 * Description of TechnicienParticulier
 *
 * @author simplon
 */
class TechnicienParticulier extends TechnicienAbstrait{
    
    protected function creerFabrique(): IFabrique {
        return new FabriqueParticulier();
    }

}
