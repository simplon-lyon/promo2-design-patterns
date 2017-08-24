<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui;

/**
 * Description of SimpleUiFactory
 *
 * @author simplon
 */
class SimpleUiFactory {
    public static function creerFactory(): IFactoryUi {
        switch($_SESSION['user']['rights']) {
            case 0:
                return new FactoryUiUser();
            case 1:
                return new FactoryUiAdmin();
        }
    }
}
