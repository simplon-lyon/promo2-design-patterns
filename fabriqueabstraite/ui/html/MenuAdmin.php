<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

/**
 * Description of MenuAdmin
 *
 * @author simplon
 */
class MenuAdmin extends MenuUser{
    
    public function getLinks():string {
        return '<li>Gestion</li>' . parent::getLinks();
    }
}
