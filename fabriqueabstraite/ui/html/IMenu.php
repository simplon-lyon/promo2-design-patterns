<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace fabriqueabstraite\ui\html;

/**
 *
 * @author simplon
 */
interface IMenu {
    function getLinks():string;
    function drawMenu():string;
}
