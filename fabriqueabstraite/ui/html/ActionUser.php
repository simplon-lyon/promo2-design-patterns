<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

/**
 * Description of ActionUser
 *
 * @author simplon
 */
class ActionUser implements IActions{
    
    public function drawActions(): string {
        return '<form>'.$this->getActions().'</form>';
    }

    public function getActions(): string {
        return '<button>Acheter</button>';
    }

}
