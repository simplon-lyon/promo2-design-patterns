<?php


namespace observateur\rpg;

use observateur\interfaces\IObservateurRpg;

/**
 * Description of MpBar
 *
 * @author simplon
 */
class MpBar implements IObservateurRpg{
    
    public function draw($mp) {
        echo '<div class="barre"><div class="mp lvl" style="width:'
        .$mp. '%"></div></div>';
    }

    public function update(int $hp, int $mp) {
        $this->draw($mp);
    }

}
