<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\rpg;

use observateur\interfaces\IObservateurRpg;

/**
 * Description of BoutonDegat
 *
 * @author simplon
 */
class BoutonDegat implements IObservateurRpg{
    private $hidden = false;
    
    public function draw() {
        $display = 'block';
        if($this->hidden) {
            $display = 'none';
        }
        
        echo '<form style="display:'.$display.'">'
                . '<button name="action" value="degat">Prendre des Dégâts</button>'
                . '</form>';
    }
    
    public function update(int $hp, int $mp) {
        if($hp <= 0) {
            $this->hidden = true;
        }else {
            $this->hidden = false;
        }
        $this->draw();
    }

}
