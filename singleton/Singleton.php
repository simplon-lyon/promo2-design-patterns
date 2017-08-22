<?php

namespace singleton;

/**
 * Le singleton permet d'avoir une classe dont on ne pourra créer
 * qu'une seule instance qui sera réutilisée partout dans l'app.
 *
 * @author simplon
 */
class Singleton {
    private static $instance;
    
    private $compteur;
    
    private function __construct() {
        $this->compteur = 0;
    }
    
    private function __clone() {
    }
    
    public static function getInstance():Singleton {
        if(is_null(self::$instance)) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    
    public function count() {
        $this->compteur++;
        echo $this->compteur;
    }
}
