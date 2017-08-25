<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\interfaces;

/**
 * L'interface ISujet représentera la classe qui pourra être observée.
 * @author simplon
 */
interface ISujet {
    function ajouterObservateur(IObservateur $observateur);
    function supprimerObservateur(IObservateur $observateur);
    function notifierObservateurs();
}
