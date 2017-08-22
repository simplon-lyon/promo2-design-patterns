<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\piece;

use strategie\piece\acces\CleanAccess;

/**
 * Description of Salon
 *
 * @author simplon
 */
class Salon extends Piece{
    public function __construct() {
        parent::__construct(new CleanAccess());
    }
}
