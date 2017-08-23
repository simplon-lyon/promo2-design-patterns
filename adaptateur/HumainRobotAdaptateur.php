<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adaptateur;

use strategie\Robot;
use strategie\tache\TacheMenage;

/**
 * Le pattern adaptateur va permettre de prendre une classe existante
 * et de l'insérer dans un autre système où elle ne pouvait pas rentrer
 * comme il faut.
 * Pour ce faire, on créer un adaptateur qui lui s'insère comme il faut
 * dans le système cible et qui utilise la classe existante pour faire
 * ses méthodes.
 * (ici, on fait un adaptateur pour déguiser un Humain en Robot pour
 * qu'il puisse utiliser les Piece qui attendent des Robot en 
 * argument)
 *
 * @author simplon
 */
class HumainRobotAdaptateur extends Robot {
    //l'humain à adapter
    private $humain;
    
    public function __construct(Humain $humain) {
        //Ca, ça fait pas parti du pattern et c'est inutile,
        //c'est juste que PHP n'accepte pas le null comme il devrait
        parent::__construct(new TacheMenage());
        $this->humain = $humain;
    }
    
    public function communiquer() {
        //On prend les méthode de l'Humain et on les adapte au Robot
        echo $this->humain->faireLaConversation();
    }
    
    public function effectuerTache() {
        echo $this->humain->allerSurYoutube();
    }
}
