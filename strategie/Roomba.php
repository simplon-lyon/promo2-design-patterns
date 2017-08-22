<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie;

use strategie\tache\TacheMenage;

/**
 * Description of Roomba
 *
 * @author simplon
 */
class Roomba extends Robot{
    public function __construct() {
        parent::__construct(new TacheMenage());
    }
}
