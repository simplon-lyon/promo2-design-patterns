<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur\logger;

use strategie\piece\acces\AllAccess;
use strategie\piece\Piece;

/**
 * Description of AbstractLogger
 *
 * @author simplon
 */
abstract class AbstractLogger extends Piece {
    protected $piece;
    
    public function __construct(Piece $piece) {
        parent::__construct(new AllAccess());
        $this->piece = $piece;
        
        
    }
}
