<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur\logger;

use strategie\Robot;

/**
 * Description of LoggerHTML
 *
 * @author simplon
 */
class LoggerHTML extends AbstractLogger{
    
    public function autoriser(Robot $robot) {
        echo '<p class="log">'.date('d/m/Y h:i:s').' DEBUT appel de la méthode autoriser'
                . 'pour le robot '. get_class($robot).'</p>';
        $reponse =  $this->piece->autoriser($robot);
        echo '<p class="log">'.date('d/m/Y h:i:s').' FIN appel de la méthode autoriser'
                . ' pour le robot '. get_class($robot).'</p>';
        return $reponse;
                
    }
}
