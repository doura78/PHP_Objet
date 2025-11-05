<?php

class country
{
    // attributs
    public $name;
    public $capitale;
    public $population;
    public $continent;


    public function __construct($nom_param, $capitale_param, $population_param, $continent_param)
    {
        $this->name = $nom_param;
        $this->capitale = $capitale_param;
        $this->population = $population_param;
        $this->continent = $continent_param;
    }

    public function getInfo()
    {
        return "Le pays " . $this->name . " situé en " . $this->continent . " et a pour capitale " . $this->capitale .
            " et compte environ " . $this->population . " millions d’habitants. ";
        echo "<br>";
    }

// --- GETTERS permettent de recuperer des infos d'une classe si elle est passé en private---
    public function getName()
    {
        return $this->name;
    }

    public function getCapital()
    {
        return $this->capitale;
    }

    public function getPopulation()
    {
        return $this->population;
    }

    public function getContinent()
    {
        return $this->continent;
    }

    // --- SETTERS (modification du nom et de la population) ---
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPopulation($population)
    {
        if ($population > 0) {
            $this->population = $population;
        } else {
            echo "Erreur : la population doit être positive.\n";
        }
    }
}

$Bolivie = new country("Bolivie", "La Paz", 12581843, "Amérique du sud");
echo $Bolivie->getInfo();
echo "<br>";
echo "<br>";



public function isPopulation()
{
    if ($this->population > 90000) {
        return true;
    } else {
        return false;
    }
}


