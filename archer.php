<?php
require_once "creature.php";
class archer extends Creature {
    function __construct($nom, $sante, $force, $defense) {
        parent::__construct($nom, $sante, $force, $defense);
    }
//redefinition du cri

    public function crier()
    {
        return parent::getCrier();
    }
    public function recevoirDegats(int $degats)
    {
        $this->sante -= $degats;
        if ($this->sante < 0) {
            $this->sante = 0;
        }
        echo $this->nom . "possède désormais " . $this->sante . "points de santé" . "\n";

        //30% de chance d'esquiver
        $chance = mt_rand(1, 100); // 1 à 100
        if ($chance <= 30) {
            echo $this->nom . "esquive l'attaque, ne reçoit aucun dégât et crie" . $this->crier() . "!\n";
            return;
        }
    }

}