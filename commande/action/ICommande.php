<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace commande\action;

/**
 *
 * @author simplon
 */
interface ICommande {
    function executer();
    function annuler();
}
