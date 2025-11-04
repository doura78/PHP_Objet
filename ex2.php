<?php

$anneeDeNaissance = [1987, 1990, 2000, 2001, 2002, 2003];

echo "Année de naissance la plus grande : ". "<br>";
    for ($j = 0; $j <0 ; $j++);
{
    echo max($anneeDeNaissance);
    echo "<br>" . "<br>";
    echo "Année de naissance la plus petite : " . "<br>";
    echo min($anneeDeNaissance);
    echo "<br>" . "<br>";

    $anneeDeNaissancePaires = 0;

    $anneesDeNaissance = $anneeDeNaissance;
    foreach ($anneesDeNaissance as $value) {
        if ($anneeDeNaissancePaires % 2 == 0) {
            $anneeDeNaissancePaires ++;
        }
        echo "Nombre d'années de naissance paires : ". $anneeDeNaissance. "<br>";
    }
}