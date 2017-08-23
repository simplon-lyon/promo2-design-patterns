<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur\supplement;

/**
 * Description of LaitSoja
 *
 * @author simplon
 */
class LaitSoja extends Supplement{
    
    public function getDescription(): string {
        return $this->breuvage->getDescription() . ' avec du lait de soja';
    }

    public function getPrix(): float {
        return $this->breuvage->getPrix() + 1;
    }

}
