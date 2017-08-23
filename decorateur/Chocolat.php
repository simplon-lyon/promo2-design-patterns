<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur;

/**
 * Description of Chocolat
 *
 * @author simplon
 */
class Chocolat implements IBreuvage{
    
    public function getDescription(): string {
        return 'Un bon benco';
    }

    public function getPrix(): float {
        return 2.5;
    }

}
