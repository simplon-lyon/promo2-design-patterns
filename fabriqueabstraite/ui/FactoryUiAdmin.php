<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui;

use fabriqueabstraite\ui\html\ActionAdmin;
use fabriqueabstraite\ui\html\IActions;
use fabriqueabstraite\ui\html\IMenu;
use fabriqueabstraite\ui\html\IProduit;
use fabriqueabstraite\ui\html\MenuAdmin;
use fabriqueabstraite\ui\html\ProduitAdmin;

/**
 * Description of FactoryUiAdmin
 *
 * @author simplon
 */
class FactoryUiAdmin implements IFactoryUi{
    
    public function creerActions(): IActions {
        return new ActionAdmin();
    }

    public function creerMenu(): IMenu {
        return new MenuAdmin();
    }

    public function creerProduit(): IProduit {
        return new ProduitAdmin();
    }

}
