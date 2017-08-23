<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur\supplement;

/**
 * Description of Chantilly
 *
 * @author simplon
 */
class Chantilly extends Supplement{
    
    public function getDescription(): string {
        return $this->breuvage->getDescription() . ' avec de la chantilly';
    }

    public function getPrix(): float {
        return $this->breuvage->getPrix() + 0.5;
    }
}
