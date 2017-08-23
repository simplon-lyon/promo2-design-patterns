<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace decorateur\logger;

/**
 * Description of LoggerFile
 *
 * @author simplon
 */
class LoggerFile extends AbstractLogger{
    
    public function autoriser(\strategie\Robot $robot) {
        $file = fopen("log.txt", "a+");
        fwrite($file, date('d/m/Y h:i:s').' DEBUT appel de la méthode autoriser'
                . 'pour le robot '. get_class($robot)."\n");
        $reponse =  $this->piece->autoriser($robot);
        fwrite($file,date('d/m/Y h:i:s').' FIN appel de la méthode autoriser'
                . 'pour le robot '. get_class($robot)."\n");
        fclose($file);
        return $reponse;
                
    }
}
