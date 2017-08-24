<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

use fabriqueabstraite\ui\entities\Produit;

/**
 *
 * @author simplon
 */
interface IProduit {
    function getLabels(Produit $prod):string;
    function drawProduit(Produit $prod):string;
}
