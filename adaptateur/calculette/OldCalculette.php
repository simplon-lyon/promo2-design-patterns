<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adaptateur\calculette;

/**
 * Description of OldCalculette
 *
 * @author simplon
 */
class OldCalculette {
    public function additionner(int $a, int $b) {
        return $a+$b;
    }
    public function soustraire(int $a, int $b) {
        return $a-$b;
    }
    public function diviser(int $a, int $b) {
        return $a/$b;
    }
    public function multiplier(int $a, int $b) {
        return $a*$b;
    }
}
