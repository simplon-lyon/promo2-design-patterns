<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace observateur\interfaces;

/**
 * L'interface IObservateur sera à implémentée par toutes les classes
 * qui voudront surveiller un sujet précis.
 * @author simplon
 */
interface IObservateur {
    function update(int $temperature, int $batterie, int $humeur);
}
