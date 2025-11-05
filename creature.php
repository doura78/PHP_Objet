<?php

//création de la classe Creature

class creature
{
//Attributs
    protected $nom;
    protected $sante;
    protected $force;
    protected $defense;

    // constructeur
    public function __construct($nom, $sante, $force, $defense)
    {
        $this->nom = $nom;
        $this->sante = $sante;
        $this->force = $force;
        $this->defense = $defense;
    }

// méthode attaquer
    public function attaquer(creature $adversaire)
    {
        // calcul des dégats : force - défense
        $degats = $this->force - $adversaire->defense;
        if ($degats < 0) {
            $degats = 0; // minimum
        }
        echo $this->nom . "attaque" . $adversaire->nom . "et inflige" . $degats . "dégâts" . "\n";
        $adversaire->recevoirDegats($degats);
    }

    // méthode dégats qui reduit les points de santé
    public function recevoirDegats(int $degats)
    {
        $this->sante -= $degats;
        if ($this->sante < 0) {
            $this->sante = 0;
        }
        echo $this->nom . "possède désormais " . $this->sante . "points de santé" . "\n";
    }

    //méthode en vie
    public function estEnVie()
    {
        if ($this->sante < 0) ;
    }

    // méthode crier
    public function getcrier()
    {
        return $this->nom . " pousse son cri de guerre : ";
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getSante()
    {
        return $this->sante;
    }

    public function getForce()
    {
        return$this->force;
    }

    public function getDefense()
    {
        return $this->defense;
    }


}



