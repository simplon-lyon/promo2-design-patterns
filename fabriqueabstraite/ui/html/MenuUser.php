<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

/**
 * Description of MenuUser
 *
 * @author simplon
 */
class MenuUser implements IMenu {
    
    public function drawMenu(): string {
        return '<nav><ul>' . $this->getLinks() . '</ul></nav>';
    }

    public function getLinks(): string {
        return '<li>Produits</li><li>Mon compte</li><li>Déconnexion</li>';
    }

}
