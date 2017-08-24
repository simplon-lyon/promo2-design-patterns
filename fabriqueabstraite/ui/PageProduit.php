<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui;

use fabriqueabstraite\ui\entities\Produit;

/**
 * Description of PageProduit
 *
 * @author simplon
 */
class PageProduit {
    private $produits;
    private $factory;
    
    public function __construct() {
        $this->factory = SimpleUiFactory::creerFactory();
        $this->produits = [
            new Produit("produit 1", 10, 4, "fournisseur 1"),
            new Produit("produit 2", 5, 4485, "fournisseur 1"),
            new Produit("produit 3", 13, 10, "fournisseur 2"),
            new Produit("produit 4", 8, 2, "fournisseur 2"),
        ];
    }
    
    public function drawUi() {
        $menu = $this->factory->creerMenu();
        echo $menu->drawMenu();
        
        foreach($this->produits as $produit) {
            echo $this->factory->creerProduit()->drawProduit($produit);
            echo $this->factory->creerActions()->drawActions();
        }
        
    }
}
