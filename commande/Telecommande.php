<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace commande;

use commande\action\ICommande;

/**
 * Description of Telecommande
 *
 * @author simplon
 */
class Telecommande {
    private $boutons = [];
    private $historique = [];
    
    public function ajouterAction(ICommande $commande) {
        $this->boutons[] = $commande;
    }
    
    public function actionnerBtn(int $index) {
        $this->boutons[$index]->executer();
        $this->historique[] = $this->boutons[$index];
    }
    
    public function btnAnnuler() {
        if (count($this->historique) > 0){
            $this->historique[count($this->historique)-1]->annuler();
            array_splice($this->historique, count($this->historique)-1, 1);
        }
    }
}
