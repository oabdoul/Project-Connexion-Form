<?php

// Inclure des fichiers externes
include (__DIR__.'/databaseconnect.php');

// Vérification que les données sont saisies
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    // Requête d'insertion des données utilisateur dans la base de données
    $sqlQuery = "INSERT INTO users(username, email, mdp) VALUES ( :username, :email, :mdp)";
    $requete = $bdd->prepare($sqlQuery);
    $requete->execute([
        'username' => $username,
        'email' => $email,
        'mdp' => $mdp
    ]);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vous êtes connecté</title>
</head>
<body>
    <div class="container">
        <p><?php echo 'Inscription reussie '.$username;?></p>
        <p><a href="connexion.php">Connectez-vous</a></p>
    </div>

</body>
</html> 
