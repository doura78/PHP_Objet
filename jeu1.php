<?php
require_once "creature.php";
require_once "guerrier.php";
require_once "mage.php";
require_once "archer.php";

// creation de créatures qui héritent de la classe créature

$guerrier = new creature("Ichigo", 150, 20, 10);
$mage = new creature("Gandalf", 100, 30, 5);
$archer = new creature("Hawkeye", 120, 15, 8);



echo $guerrier->getNom();
echo "<br>";
echo "possède ". $guerrier->getSante(). " points de santé ";
echo "<br>";
echo "possède ". $guerrier->getForce(). " points de force ";
echo "<br>";
echo "possède ". $guerrier->getDefense(). " points de defense ";
echo "<br>";
echo $guerrier->getCrier() . " Pour la gloire ! ";
echo "<br>";
echo "<br>";
echo "<br>";


echo $mage->getNom();
echo "<br>";
echo "possède ".$mage->getSante(). " points de santé";
echo "<br>";
echo "possède " . $mage->getForce(). " points de force ";
echo "<br>";
echo "possède ". $mage->getDefense(). " points de defense ";
echo "<br>";
echo $mage->getCrier() . " Abracadabra ! ";
echo "<br>";
echo "<br>";
echo "<br>";

echo $mage->getNom();
echo "<br>";
echo "possède ". $mage->getSante()." points de santé";
echo "<br>";
echo "possède ". $mage->getForce()." points de force ";
echo "<br>";
echo "possède ". $mage->getDefense(). " points de defense ";
echo "<br>";
echo $archer->getCrier() . " Prêt à viser !";
echo "<br>";
echo "<br>";
echo "<br>";
