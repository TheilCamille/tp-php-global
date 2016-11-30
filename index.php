<?php

session_start();
$prenom = $_POST['prenom'];
$pays = $_POST['pays'];
$genre = $_POST['genre'];
$news = $_POST['news'];

$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['pays'] = $_POST['pays'];
$_SESSION['genre'] = $_POST['genre'];
$_SESSION['news'] = $_POST['news'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TP PHP</title>
</head>
<body>
    <p>Bravo ! Tu t'appels <?php echo $prenom ?></p>
    <p>Tu viens de ce merveilleux pays qu'on appel <?php echo $pays ?></p>
    <p>Tu es du genre <?php echo $genre ?> quelle chance ! Le sexe fort :)</p>
    <p>Inscription à la Newsletter : <?php echo $news ?></p>
    <a href="page2.php">Pour continuer c'est par là...</a>
</body>
</html>