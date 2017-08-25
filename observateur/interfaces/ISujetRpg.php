<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\interfaces;

/**
 *
 * @author simplon
 */
interface ISujetRpg {
    function ajouterObservateur(IObservateurRpg $observateur);
    function supprimerObservateur(IObservateurRpg $observateur);
    function notifierObservateurs();
}
