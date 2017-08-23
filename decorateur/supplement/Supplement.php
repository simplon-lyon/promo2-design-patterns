<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur\supplement;

use decorateur\IBreuvage;

/**
 * Description of ISupplement
 *
 * @author simplon
 */
abstract class Supplement implements IBreuvage {
    protected $breuvage;
    
    public function __construct(IBreuvage $breuvage) {
        $this->breuvage = $breuvage;
    }
}
