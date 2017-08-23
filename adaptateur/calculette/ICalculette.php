<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adaptateur\calculette;

/**
 *
 * @author simplon
 */
interface ICalculette {
    function calculer(int $a, int $b, string $operateur);
}
