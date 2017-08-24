<?php

namespace fabrication;

use decorateur\IBreuvage;
use decorateur\supplement\Chantilly;
use decorateur\supplement\LaitSoja;

/**
 * Description of ProcedeViennois
 *
 * @author simplon
 */
abstract class ProcedeViennois {
    private $recette = 0;
    
    protected abstract function creerBreuvage():IBreuvage;
    
    public function servirViennois() {
        $breuvage = new Chantilly(new LaitSoja($this->creerBreuvage()));
        $this->recette += $breuvage->getPrix();
        
        echo 'Je vous sers ' . $breuvage->getDescription();
        
    }
    
    
}
