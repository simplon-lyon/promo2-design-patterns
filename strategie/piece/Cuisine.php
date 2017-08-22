<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\piece;

use strategie\piece\acces\AllAccess;

/**
 * Description of Cuisine
 *
 * @author simplon
 */
class Cuisine extends Piece{
    public function __construct() {
        parent::__construct(new AllAccess());
    }
}
