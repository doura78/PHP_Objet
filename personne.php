<?php
/*
 class nomClass{
}
 */

class Personne{
    //Attributs ou variables
    public $nom;
    public $prenom;
    public $age;

    // méthodes ou fonctions

    public function monIdentite(){
        echo $this->nom. 'Prenom : '.$this->prenom. 'Age : '.$this->age;
    }

    public function afficheMonNom(){
        return "mon nom est : ".$this->nom;
    }
}

// des Objets

$personne1 = new Personne();
$personne1->nom = 'Alex';
$personne1->prenom = 'Maria';
$personne1->age = 20;
$personne1->monIdentite(); echo "<br>";
echo $personne1->afficheMonNom();


///**
// * Créer une classe voiture
// * Attributs $marque, $anneeDeFabrication, $couleur
// * Fonction: afficherCaracteristique
// */

class voiture{
    public $marque;
    public $anneeDeFabrication;
    public $couleur;

    public function __construct($marque_param, $anneeDeFabrication_param, $couleur_param)
    {
        $this->marque = $marque_param;
        $this->anneeDeFabrication = $anneeDeFabrication_param;
        $this->couleur = $couleur_param;
    }
    public function afficher() {
        echo "marque : " . $this->marque . "<br>";
        echo "anneeDeFabrication : " . $this->anneeDeFabrication . " km<br>";
        echo "couleur : " . $this->couleur . "<br>";
    }
}


$maVoiture = new voiture("Audi A4", 2016, "Rouge");


$maVoiture->afficher();
echo "<br>";
echo "====================================================";
echo "<br>";



