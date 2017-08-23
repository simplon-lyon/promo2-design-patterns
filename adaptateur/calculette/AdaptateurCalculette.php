<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adaptateur\calculette;

/**
 * Description of AdaptateurCalculette
 *
 * @author simplon
 */
class AdaptateurCalculette implements ICalculette{
    private $oldCalc;
    
    public function __construct(OldCalculette $oldCalc) {
        $this->oldCalc = $oldCalc;
    }
    
    public function calculer(int $a, int $b, string $operateur) {
        switch($operateur) {
            case '+':
            default:
                return $this->oldCalc->additionner($a, $b);
            case '-':
                return $this->oldCalc->soustraire($a, $b);
            case '*':
                return $this->oldCalc->multiplier($a, $b);
            case '/':
                return $this->oldCalc->diviser($a, $b);
        }
    }

}
