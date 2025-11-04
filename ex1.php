<?php
//
//$users = ['Paul', 'Esaie', 'Ines', 'Jolie', 'Vincent'];
//$users_age = [26, 45, 67, 12, 39];
//
//for ($i = 0; $i < count($users); $i++) {
//    helloName($users[$i]);
//    echo " J'ai " . $users_age[$i] . " ans " . '<br>' . '<br>';;
//}
//
//function helloName($name)
//{
//    echo 'Bonjour ' . $name;
//};
//$anneeDeNaissance = [2021, 2023, 2024, 2025];
// for ($i = 0; $i < count($anneeDeNaissance); $i++) {
//     if ($anneeDeNaissance[$i] == 2021) {
//         echo "Dans 3 ans vous aurez 2024"; PHP_EOL;
//     }elseif ($anneeDeNaissance[$i] == 2023) {
//         echo  2026;
//     }elseif ($anneeDeNaissance[$i] == 2024) {
//         echo 2027;
//     }elseif ($anneeDeNaissance[$i] == 2025) {
//         echo 2028;
//     }
// }

//// afficher si majeur ou mineur
//if ($users_age > 18) ;
//{
//    echo 'Vous etes majeur';
//}else{
//    echo 'Vous etes mineur';
//};
//
//    //afficher les nombre de 0 à 5
//for($i =0; $i<6; $i++){
//    echo '$i';
//}

//Condition for pour parcourir un tableau ou une liste

//    $ages = [50, 59, 48, 67];
//
//    for ($i = 0; $i < count($ages); $i++) {
//        echo $ages[$i] . "<br>";
//    }
//
//    foreach ($ages as $value) {
//        echo $value . "<br>";
//    }


/* Afficher la date de naissance contenus dans une variable $years;
    */

$years = [1987, 1990, 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008];

echo " Differentes années avec for". "<br>";
for ($i=0; $i<5; $i++) {
    echo $years[$i] . "<br>";
    echo  "<br>";
}
echo "differentes années avec foreach" . "<br>";
foreach ($years as $value) {
    echo $value . "<br>";
    echo  "<br>";
}