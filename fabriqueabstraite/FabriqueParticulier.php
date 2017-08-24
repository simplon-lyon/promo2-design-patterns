<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite;

use fabriqueabstraite\piece\CuisineParticulier;
use fabriqueabstraite\piece\SalonParticulier;
use fabriqueabstraite\robot\RobotCuistotParticulier;
use fabriqueabstraite\robot\RobotMenagerParticulier;
use strategie\piece\Cuisine;
use strategie\piece\Salon;
use strategie\RobotCuistot;
use strategie\RobotMenager;

/**
 * Description of FabriqueParticulier
 *
 * @author simplon
 */
class FabriqueParticulier implements IFabrique{
    public function creerCuisine(): Cuisine {
        return new CuisineParticulier();
    }

    public function creerCuistot(): RobotCuistot {
        return new RobotCuistotParticulier();
    }

    public function creerMenager(): RobotMenager {
        return new RobotMenagerParticulier();
    }

    public function creerSalon(): Salon {
        return new SalonParticulier();
        }

}
