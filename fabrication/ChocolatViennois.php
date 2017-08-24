<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabrication;

use decorateur\Chocolat;
use decorateur\IBreuvage;

/**
 * Description of ChocolatViennois
 *
 * @author simplon
 */
class ChocolatViennois extends ProcedeViennois{
    
    
    protected function creerBreuvage(): IBreuvage {
        return new Chocolat();
    }

}
