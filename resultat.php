<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancé de dés</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
$nbDe = $_POST['nbDe'];
$nbFace = $_POST['nbFace'];
$listeResultatDe= array("") ;

for ($n=1; $n<$nbDe+1; $n++) {
    $resultatDe = random_int(1,$nbFace);
    array_push($listeResultatDe,"$resultatDe");
}

$resultatTotal = array_sum($listeResultatDe);

?>
    <header>
        <img src="dice.png" alt="image de dés">
    </header>

    <main>
        <p>Tu as choisis de lancer <?php echo $nbDe ?> dé(s) à <?php echo $nbFace ?> faces</p>
        <p>Voici les résultats de ton lancer:</p>

        <?php 
        for ($n=1; $n<$nbDe+1; $n++){
        ?>
        le Dé n° <?php echo $n; ?> est égal à <?php echo $listeResultatDe[$n];
        ?> <br>
        <?php }; ?> 
        <strong>Ton score est donc de: <?php echo $resultatTotal; ?></strong>
        <br>
        <form action="resultat.php" method="POST">
        <label for="nbDe" >Nombre de dés :</label></br>
        <input id="nbDe" type="text" name="nbDe" pattern="^[0-9]+$" maxlength="100" value="<?php echo $nbDe ?>"><br>
        <label for="nbFace">Nombre de faces:</label></br>
        <input id="nbFace" type="text" name="nbFace" pattern="^[0-9]+$" maxlength="100" value="<?php echo $nbFace ?>"><br>
        <input id="valider" type="submit" value="relancer ces dés">
        </form>
        <a href="index.html"><input id="accueil" type="button" value="retour à l'acceuil"></a>
    </main>
    

   

