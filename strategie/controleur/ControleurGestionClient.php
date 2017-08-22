<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\controleur;

/**
 * Description of ControleurGestionClient
 *
 * @author simplon
 */
class ControleurGestionClient extends AbstractController {
    public function __construct() {
        parent::__construct(new AdminAccess());
    }
}
