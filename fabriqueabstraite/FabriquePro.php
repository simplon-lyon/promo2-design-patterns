<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite;

use fabriqueabstraite\piece\CuisinePro;
use fabriqueabstraite\piece\SalonPro;
use fabriqueabstraite\robot\RobotCuistotPro;
use fabriqueabstraite\robot\RobotMenagerPro;
use strategie\piece\Cuisine;
use strategie\piece\Salon;
use strategie\RobotCuistot;
use strategie\RobotMenager;

/**
 * Description of FabriquePro
 *
 * @author simplon
 */
class FabriquePro implements IFabrique{
    public function creerCuisine(): Cuisine {
        return new CuisinePro();
    }

    public function creerCuistot(): RobotCuistot {
        return new RobotCuistotPro();
    }

    public function creerMenager(): RobotMenager {
        return new RobotMenagerPro();
    }

    public function creerSalon(): Salon {
        return new SalonPro();
        }

}
