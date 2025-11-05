<?php
require_once 'country.php';
require_once 'DevelopedCountry.php';

$Japon = new country(" Japon ", " Tokyo ",  1250000, " Asie ");

$Laos = new country("Laos", "Laos", 12581843, "Asie"); "<br>";"<br>";
$Guinee = new country("Guinée", "Conakry", 12581843, "Afrique");


echo $Japon->getInfo() ."\n";
echo "<br>"; echo "<br>";

echo $Laos->getInfo()."\n";
echo "<br>"; echo "<br>";

echo $Guinee->getInfo()."\n";
echo "<br>"; echo "<br>";


// Modification du nom et de la population
$Guinee->setName("République de Guinée");
$Guinee->setPopulation(68);

// Affichage après modification
echo "Après modification :\n";
echo "<br>"; echo "<br>";
echo $Guinee->getInfo() . "\n";
echo "<br>"; echo "<br>";


// tableau $scoutry avec les differentes instances

$country = [
    new country("Bolivie","La Paz", 12581843, "Amérique du sud"),
    new country("japon", "Tokyo", 10, "asie"),
    new country("Laos", "Laos", 12581843, "Asie "),
    new country("Guinée", "Guinée", 12581843, "Afrique"),
    new country("France", "Paris", 75, "Europe"),
    ];

foreach ($country as $value) {
    echo $value->getInfo();
    echo "<br>"; echo "<br>";
};

$Italie = new DevelopedCountry("Italie", "Rome", 1234555, "Europe", 125);


echo "<br>"; echo "<br>";

echo $Italie->getInfo();

function showCountry($country){
    foreach ($country as $value) {
        if(value -> populous){
            echo $value->getName(); "Fais partit des pays developés";
        }
    }
}

