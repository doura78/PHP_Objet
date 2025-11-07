<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion des plaintes</title>
    <link rel="stylesheet" href="gestionPlaintes.css">
</head>

<?php
// recuperation des infos
//nom, mail, sujet, message
require_once "bdd.php";
global $bdd;
// Verificatin de l'envoie des variables
if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['sujet']) && isset($_POST['message'])) {

    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    if (!empty($nom) && !empty($mail) && !empty($sujet) && !empty($message)) {
        // insertion direct dans la BDD
        $sql = "INSERT INTO plaintes (nom,sujet,message,date_plainte) VALUES (:nom, :sujet, :message, :date_plainte)";
        $insert = $bdd->prepare($sql);
        $verif = $insert->execute([
                "nom" => $nom,
                "sujet" => $sujet,
                "message" => $message,
                "date_plainte" => date("Y-m-d"),
        ]);


        if ($verif) {
            header('Location: plaintes.php');
            "<br>";
        }
//        echo "Je m'appelle " . $nom . "<br>" . " mon email " . $mail . "<br>" . "ma plainte porte sur " . $sujet . "<br> Contenu: <br>" . $message;
    }
}
?>
<body>
<header>
    <h1>Formulaire de dépôt de plainte</h1>
</header>
<Main>
    <form action="index.php" method="post">

        <fieldset>
            <div class="button">
                <a href="plaintes.php">
                    <button type="button" onclick="">Retour</button>
                </a>
            </div>
            <label for="nom">Nom * </label><br>
            <input type="text" name="nom" id="nom" size="45" placeholder="Veuillez indiquer votre nom de famille"
                   value=<?php if (isset($_POST['nom'])) {
                echo $_POST['nom'];
            } ?>>
            <?php
            if (isset($_POST['nom']) && empty($_POST['nom'])) {
                echo " Le nom est vide ";
            } ?>
            <br> <br>


            <label for="mail">Adresse Mail * </label><br>
            <input type="email" name="mail" id="mail" size="45" placeholder="Veuillez renseignez votre adresse mail"
                   value=<?php if (isset($_POST['mail'])) {
                echo $_POST['mail'];
            } ?>>
            <?php
            if (isset($_POST['mail']) && empty($_POST['mail'])) {
                echo " Le mail est vide ";
            } ?>
            <br> <br>


            <label for="sujet"> Objet de la plainte* </label><br>
            <input type="text" name="sujet" id="sujet" size="45"
                   placeholder="Veuillez precisez le motif de votre plainte" value=<?php if (isset($_POST['sujet'])) {
                echo $_POST['sujet'];
            } ?>>
            <?php
            if (isset($_POST['sujet']) && empty($_POST['sujet'])) {
                echo " Le sujet est vide ";
            } ?>
            <br> <br>


            <label for="message">Message * </label><br>
            <textarea id="message" name="message" rows="5" cols="43"
                      placeholder="Veuillez retranscrire le plus fidèlement votre message"><?php if (isset($plaintes['message'])) {
                    echo $plaintes['message'];
                } ?></textarea>
            <?php
            if (isset($_POST['message']) && empty($_POST['message'])) {
                echo " Le message est vide ";
            } ?>
            <br><br>

            <a href="plaintes.php">
                <button type="submit">Envoyer le message</button>
            </a>
            <br> <br>
            <?php
            if (!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {
                echo "Je m'appelle : " . $_POST['nom'] . "<br>" . " mon email : " . $_POST['mail'] . "<br>" . "ma plainte porte sur : " . $_POST['sujet'] . "<br> Contenu : <br>" . $_POST['message'];
            } ?>
            <br>
        </fieldset>
    </form>
</Main>


</body>
</html>