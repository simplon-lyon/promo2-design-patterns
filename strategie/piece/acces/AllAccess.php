<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\piece\acces;

use strategie\Robot;

/**
 * Description of AllAccess
 *
 * @author simplon
 */
class AllAccess implements IAccess{
    
    public function hasAccess(Robot $robot): bool {
        return true;
    }

}
