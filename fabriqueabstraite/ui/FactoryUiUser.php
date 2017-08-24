<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui;

use fabriqueabstraite\ui\html\ActionUser;
use fabriqueabstraite\ui\html\IActions;
use fabriqueabstraite\ui\html\IMenu;
use fabriqueabstraite\ui\html\IProduit;
use fabriqueabstraite\ui\html\MenuUser;
use fabriqueabstraite\ui\html\ProduitUser;

/**
 * Description of FactoryUiUser
 *
 * @author simplon
 */
class FactoryUiUser implements IFactoryUi{
    
    public function creerActions(): IActions {
        return new ActionUser();
    }

    public function creerMenu(): IMenu {
        return new MenuUser();
    }

    public function creerProduit(): IProduit {
        return new ProduitUser();
    }

}
