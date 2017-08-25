<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\rpg;

use observateur\interfaces\IObservateurRpg;

/**
 * Description of HpBar
 *
 * @author simplon
 */
class HpBar implements IObservateurRpg{
    
    public function draw($hp) {
        echo '<div class="barre"><div class="hp lvl" style="width:'
        .$hp. '%"></div></div>';
    }

    public function update(int $hp, int $mp) {
        $this->draw($hp);
    }

}
