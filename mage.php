<?php
require_once "creature.php";

class mage extends Creature
{
    function __construct($nom, $sante, $force, $defense)
    {
        parent::__construct($nom, $sante, $force, $defense);
    }

//redefinition du cri

    public function crier()
    {
        return parent::getCrier();
    }

    public function attaquer(creature $adversaire)
    {
        // calcul des dégats : force - défense
        $degats = $this->force + 10 - $adversaire->defense;
        if ($degats < 0) {
            $degats = 0; // minimum
        }
        echo $this->nom . "attaque" . $adversaire->nom . "et inflige" . $degats . "dégâts" . "\n";
        $adversaire->recevoirDegats($degats);
    }
}