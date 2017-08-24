<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\entities;

/**
 * Description of Produit
 *
 * @author simplon
 */
class Produit {

    public $label;
    public $prix;
    public $stock;
    public $fournisseur;

    function __construct($label, $prix, $stock, $fournisseur) {
        $this->label = $label;
        $this->prix = $prix;
        $this->stock = $stock;
        $this->fournisseur = $fournisseur;
    }

}
