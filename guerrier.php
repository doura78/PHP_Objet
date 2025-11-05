<?php
require_once "creature.php";

class guerrier extends Creature {
    function __construct($nom, $sante, $force, $defense) {
    parent::__construct($nom, $sante, $force, $defense);
    }
//redefinition du cri

    public function crier()
    {
        return parent::getCrier();
    }


}