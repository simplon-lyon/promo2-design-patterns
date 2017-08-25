<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\rpg;

use observateur\interfaces\IObservateurRpg;

/**
 * Description of BoutonSoigner
 *
 * @author simplon
 */
class BoutonSoigner implements IObservateurRpg{
    private $hidden = false;
    
    public function draw() {
        $display = 'block';
        if($this->hidden) {
            $display = 'none';
        }
        
        echo '<form style="display:'.$display.'">'
                . '<button name="action" value="soigner">Soigner</button>'
                . '</form>';
    }
    
    public function update(int $hp, int $mp) {
        if($hp >= 100 || $mp < 25) {
            $this->hidden = true;
        }else {
            $this->hidden = false;
        }
        $this->draw();
    }

}
