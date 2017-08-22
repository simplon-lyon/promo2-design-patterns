<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\controleur;

/**
 * Description of AbstractController
 *
 * @author simplon
 */
class AbstractController {
    private $access;
    
    public function __construct(IWebAccess $access) {
        $this->access = $access;
        $this->init();
    }
    
    private function init() {
        if(!$this->access->userHasAccess()) {
            header('Location: index.php'); 
        }
    }
    
    
    
}
