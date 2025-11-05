<?php


class arene
{
    public function lancerCombat(Creature $c1, Creature $c2)
    {
        echo "Le combat commence entre " . $c1->getNom() . " et " . $c2->getNom();
        echo "<br>";
        echo "<br>";

        $pvInitialeC1 = $c1->getSante();
        $pvInitialeC2 = $c2->getSante();


        // Boucle de combat sur 1 manche

        while ($c1->estEnVie() && $c2->estEnVie()) {
            if ($c1->estEnVie()) {
                $c1->attaquer($c2);
            }
            if ($c2->estEnVie()) {
                $c2->attaquer($c1);
            }
            echo "<br>";
            echo "<br>";
        }
        //calcul perte PV
        $perteC1 = $pvInitialeC1 - $c1->getSante();
        $perteC2 = $pvInitialeC2 - $c2->getSante();
        echo " Pertes de PV : ". $c1->getNom(). " a perdu ". $perteC1. " PV, ". $c2->getNom(). " a perdu ". $perteC2. " PV ";
        echo "<br>";
        echo "<br>";

        if ($c1 -> estEnVie()) {
            echo $c1 -> getNom(). " remporte la manche avec ". $c1 -> getSante(). " de PV restant !";
            return 1; // victoire de c1
            echo "<br>";
            echo "<br>";

        }else{
            echo $c2 ->getNom(). " remporte la manche avec ". $c2 -> getSante(). " de PV restant ! \n\n";
            return 2; // victoire de c2
            echo "<br>";
            echo "<br>";
        }
    }

    // combat en 3 manches

    public function lancerMatch(Creature $c1, Creature $c2, $manches = 3){
        $victoireC1 = 0;
        $victoireC2 = 0;
        $round = 1;

        echo " Match entre ". $c1->getNom(). " et ". $c2->getNom(). " en ". $manches. " manches (best of )". ceil($manches/2);
    //En PHP, ceil() est une fonction mathématique qui arrondit un nombre à l’entier supérieur (le plus proche entier plus grand ou égal).
        echo "<br>";
        echo "<br>";

        //reinitialisation des PV

       $pvInitialeC1 = $c1->getSante();
       $pvInitialeC2 = $c2->getSante();

        while ($victoireC1 < ceil($manches/2) && $victoireC2 < ceil($manches/2)) {
            echo " === Manche === ". $round;
            echo "<br>";
            echo "<br>";

            // On recrée les créatures avec leurs stats initiales pour chaque manche
            $clone1 = new creature($c1 ->getNom(), $pvInitialeC1, $c1 ->getForce(), $c1 ->getSante());
            $clone2 = new creature ($c2 ->getNom(),$pvInitialeC2, $c2 ->getForce(), $c2 ->getSante());

            $vainqueur = $this->lancerCombat($clone1, $clone2);

            if ($vainqueur === 1) {
                $victoireC1 ++;
            } else {
                $victoireC2 ++;
            }

            echo "Score actuel : ".$c1->getNom(). $victoireC1 - $victoireC2 .$c2->getNom(). "\n\n";
            $round++;
            echo "<br>";
            echo "<br>";
        }

        echo " === Résultat final ===";
        echo "<br>";
        echo "<br>";

        if ($victoireC1 > $victoireC2) {
            echo  $c1->getNom(). " remporte le match ". $victoireC1. " à ". $victoireC2;
            echo "<br>";
            echo "<br>";
        } else {
            echo  $c2->getNom(). " remporte le match ". $victoireC2. " à " .$victoireC1;
            echo "<br>";
            echo "<br>";
        }

    }




}

