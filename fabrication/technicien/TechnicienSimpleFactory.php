<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabrication\technicien;

/**
 * Description of TechnicienSimpleFactory
 *
 * @author simplon
 */
class TechnicienSimpleFactory {
    
    public static function creerTechnicien(string $type):TechnicienAbstrait {
        switch($type) {
            case 'particulier':
            default:
                return new TechnicienParticulier();
            case 'pro':
                return new TechnicienPro();
        }
    }
}
