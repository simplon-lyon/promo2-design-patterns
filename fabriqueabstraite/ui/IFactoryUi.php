<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui;

use fabriqueabstraite\ui\html\IActions;
use fabriqueabstraite\ui\html\IMenu;
use fabriqueabstraite\ui\html\IProduit;

/**
 *
 * @author simplon
 */
interface IFactoryUi {
    function creerMenu():IMenu;
    function creerProduit():IProduit;
    function creerActions():IActions;
}
