<?php

interface siteWeb{
    public function pageAccueil();
    public function pageContact();
}

class siteDynamique implements siteWeb{
    public $nom = "Site de voiture";

    public function __construct($nom){
        $this->nom = $nom;
    }

    public function nomVoiture(){
        echo $this->nom;
    }
}

$site = new siteDynamique();
$site->nomVoiture();

