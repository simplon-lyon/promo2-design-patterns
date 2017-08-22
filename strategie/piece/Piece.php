<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\piece;

use strategie\piece\acces\IAccess;
use strategie\Robot;

/**
 * Description of Piece
 *
 * @author simplon
 */
abstract class Piece {
    private $access;
    
    public function __construct(IAccess $access) {
        $this->access = $access;
    }
    
    public function autoriser(Robot $robot) {
        if($this->access->hasAccess($robot)) {
            echo 'la porte est ouverte';
        }else{
            echo 'la porte reste fermée';
        }
    }
}
