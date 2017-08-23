<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur;

/**
 * Description of Cafe
 *
 * @author simplon
 */
class Cafe implements IBreuvage{
    //put your code here
    public function getDescription(): string {
        return 'Un café arabica';
    }

    public function getPrix(): float {
        return 1;
    }

}
