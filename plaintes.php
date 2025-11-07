<?php
global $bdd;
require_once "bdd.php";
////Recuperer la liste des plaintes


$sql = "SELECT * FROM plaintes";// Ma requete SQL
$query = $bdd->query($sql);// J'execute la request avec query()
$plaintes = $query->fetchAll();//Je stocke dans $plaintes le retour de $query sous forme de tableau


//DELETE FROM TABLES WHERE ID = $id

if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['action']) && !empty($_GET['action'] == "delete")) {

//Recuperation de mon id
    $id = $_GET['id'];

    $sql = "DELETE FROM plaintes WHERE id = :id";
    $query = $bdd->prepare($sql);
    $verif = $query->execute(["id" => $id]);

//    $verif = $query->execute([
//            "id" => $id
//    ]);
    if ($verif) {
        header("Location: plaintes.php");
    }
}

if (isset($_GET['id']) && !empty($_GET['id']) && isset ($_GET['visible'])  && $_GET['action'] == "changerstatut" ) {

//Modification de mon id
    $visible = $_GET['visible'];
    $id = $_GET['id'];
    $sql = "UPDATE plaintes SET visible = :visible WHERE id = :id"

    //Modification d'une plainte
    /*
     *
     */
    ;
    $query = $bdd->prepare($sql);
    $verif = $query->execute([
            "visible" => $visible ? 0:1,
            'id' => $id
    ]);
}

//Suppression multiple
if (isset($_GET['id_selected'])){

    $id_selected = $_GET['id_selected'];

    // Verifier si tableau pas vide
    if (count($id_selected) > 0){

        $sql = "DELETE FROM plaintes WHERE id = :id";
        $query = $bdd->prepare($sql);

        //suppression par id
        foreach ($id_selected as $id_s){

             $query->execute([
                    "id" => $id_s // Valeur id actuelle
            ]);
        }
    }
}

$sql = "SELECT * FROM plaintes";// Ma requete SQL
$query = $bdd->query($sql);// J'execute la request avec query()
$plaintes = $query->fetchAll();//Je stocke dans $plaintes le retour de $query sous forme de tableau



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Gestion des plaintes</title>
    <link rel="stylesheet" href="gestionPlaintes.css">
</head>
<body>
<header>

</header>

<main>
    <a href="index.php">
        <button onclick="">Ajouter une plainte</button>
    </a>




    <form action="plaintes.php" method="get">

        <button type="submit">Supprimer tout</button>

    <table>

        <thead>

        <tr>
            <td>SELECTIONNER</td>
            <td>ID</td>
            <td>NOM</td>
            <td>SUJET</td>
            <td>MESSAGE</td>
            <td>DATE PLAINTE</td>
            <td>STATUT</td>
            <td>ACTIONS</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($plaintes as $item) { ?>

            <tr>
                <td>
                    <input type="checkbox" name="id_selected[]" value="<?php echo $item['id'];?>">
                </td>
                <td> <?php echo $item['id']; ?> </td>
                <td> <?php echo $item['nom']; ?> </td>
                <td> <?php echo $item['sujet']; ?></td>
                <td> <?php echo $item['message']; ?> </td>
                <td> <?php echo $item['date_plainte']; ?> </td>
                <td>
                    <?php if (($item['visible'])) { ?> <span class="visible">Visible</span>
                    <?php } else { ?> <span class="invisible">Invisible</span> <?php } ?>
                <td>
                    <a href="plaintes.php?id=<?php echo $item['id']; ?>&action=delete">Supprimer</a>
                    <a href="edit_plaintes.php?id=<?php echo $item['id']; ?>">Modifier</a>
                    <a href="plaintes.php?id=<?php echo $item['id']; ?>&visible=<?php echo $item['visible'] ?>&action=changerstatut">changer
                        de statut</a>
                </td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
    </form>

</main>
<footer>

</footer>
</body>
</html>

