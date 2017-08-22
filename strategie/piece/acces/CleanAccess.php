<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\piece\acces;

use strategie\Robot;
use strategie\RobotMenager;
use strategie\Roomba;

/**
 * Description of CleanAccess
 *
 * @author simplon
 */
class CleanAccess implements IAccess {
    
    public function hasAccess(Robot $robot): bool {
        if($robot instanceof RobotMenager || $robot instanceof Roomba){
            return true;
        }
        return false;
    }

}
