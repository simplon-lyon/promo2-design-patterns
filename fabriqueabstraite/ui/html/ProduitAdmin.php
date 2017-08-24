<?php


namespace fabriqueabstraite\ui\html;

use fabriqueabstraite\ui\entities\Produit;

/**
 * Description of ProduitAdmin
 *
 * @author simplon
 */
class ProduitAdmin extends ProduitUser{
    
    public function getLabels(Produit $prod): string {
        return parent::getLabels($prod) . '<p>stock : ' . $prod->stock
                . '</p><p>fournisseur : ' . $prod->fournisseur . '</p>';
    }

}
