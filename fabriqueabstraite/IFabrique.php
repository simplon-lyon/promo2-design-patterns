<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite;

use strategie\piece\Cuisine;
use strategie\piece\Salon;
use strategie\RobotCuistot;
use strategie\RobotMenager;

/**
 *
 * @author simplon
 */
interface IFabrique {
    function creerCuistot():RobotCuistot;
    function creerMenager():RobotMenager;
    function creerSalon():Salon;
    function creerCuisine():Cuisine;
}
