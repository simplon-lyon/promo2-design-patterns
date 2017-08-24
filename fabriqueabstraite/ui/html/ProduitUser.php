<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

use fabriqueabstraite\ui\entities\Produit;

/**
 * Description of ProduitUser
 *
 * @author simplon
 */
class ProduitUser implements IProduit{
    
    public function drawProduit(Produit $prod): string {
        return '<article>' . $this->getLabels($prod) . '</article>';
    }

    public function getLabels(Produit $prod): string {
        return '<h3>' . $prod->label . '<h3><span>'.$prod->prix.'€<span>';
    }

}
