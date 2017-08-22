<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\controleur;

/**
 * Description of AdminAccess
 *
 * @author simplon
 */
class AdminAccess implements IWebAccess{
    
    public function userHasAccess(): bool {
        if(!empty($_SESSION['user']) 
                && $_SESSION['user']->rights === IWebAccess::ADMIN){
            return true;
        }
        return false;
    }

}
