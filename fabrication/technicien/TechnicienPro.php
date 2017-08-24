<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabrication\technicien;

use fabriqueabstraite\FabriquePro;
use fabriqueabstraite\IFabrique;

/**
 * Description of TechnicienPro
 *
 * @author simplon
 */
class TechnicienPro extends TechnicienAbstrait{

    protected function creerFabrique(): IFabrique {
        return new FabriquePro();
    }

}
