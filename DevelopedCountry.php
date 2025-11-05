<?php
require_once 'country.php';
class DevelopedCountry extends Country
{
    // nouvel attribut
    public $gdp;

// constructeur
    public function __construct($nom_param, $capitale_param, $population_param, $continent_param, $gdp_param)
    {
        parent::__construct($nom_param, $capitale_param, $population_param, $continent_param);
        $this->gdp = $gdp_param;
    }

    public function getgdp()
    {
        return $this->gdp;
    }

    public function setGdp($gdp)
    {
        $this->gdp = $gdp;
    }

    public function getInfo(){
        return "Le pays " . $this->name . " situé en " . $this->continent . " et a pour capitale " . $this->capitale .
            " et compte environ " . $this->population . " millions d’habitants ". $this->gdp . " Le PIB en Mds de $ est de " ;
        echo "<br>";
    }
}
