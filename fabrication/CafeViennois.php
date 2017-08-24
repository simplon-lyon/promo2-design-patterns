<?php



namespace fabrication;

use decorateur\Cafe;
use decorateur\IBreuvage;

/**
 * Description of CafeViennois
 *
 * @author simplon
 */
class CafeViennois extends ProcedeViennois{
    
    protected function creerBreuvage(): IBreuvage {
        return new Cafe();
    }

}
