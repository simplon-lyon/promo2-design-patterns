<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adaptateur;

/**
 * Description of Humain
 *
 * @author simplon
 */
class Humain {
    private $nom;
    private $prenom;
    
    function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    
    public function faireLaConversation():string {
        return 'Salut je suis '.$this->nom.' '.$this->prenom.
                ' et je suis un humain';
    }
    
    public function allerSurYoutube():string {
        return 'Je regarde des vidéos de chatons';
    }
    
    public function faireDodo():string {
        return 'zzz zzz zzz';
    }
    
    
}
