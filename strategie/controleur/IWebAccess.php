<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace strategie\controleur;

/**
 *
 * @author simplon
 */
interface IWebAccess {
    const ADMIN = 2;
    const USER = 1;
    
    function userHasAccess():bool;
}
