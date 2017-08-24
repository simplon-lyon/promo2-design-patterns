<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

/**
 * Description of ActionAdmin
 *
 * @author simplon
 */
class ActionAdmin implements IActions{
    
    public function drawActions(): string {
        return '<form>'.$this->getActions().'</form>';
    }

    public function getActions(): string {
        return '<button>Supprimer</button>';
    }

}
