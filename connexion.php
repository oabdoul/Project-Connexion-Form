<?php

// Vérifier la méthode d'envoie des données
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $email = $_POST["email"];
    $mdp = $_POST['mdp'];

    if(!empty($email) && !empty($mdp)){

        // Inclure des fichiers externes
        include (__DIR__.'/databaseconnect.php');

        //Rechercher l'utilisateur dans la base de données
        $sql = "SELECT * FROM users WHERE email='$email' AND mdp='$mdp'";
        $requete = $bdd->prepare($sql);
        $requete->execute();
        $response = $requete->fetch();

        if(!empty($response['id'])){
        // Création de cookies pour stocker les informations
        setcookie("email", $email, time()+ 300);
        setcookie('username', $response['username'], time()+300);
        
        // Redirection vers la page d'accueil
            header("Location: home.php");
        }
        else{
            $error_message = "Email ou mot de passe incorrect.";
        }
    }
};


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de connexion</title>
</head>
<body>



    <form action="" method="POST">
        <h1>Connexion</h1>
        <?php if(!empty($error_message)){ ?>
            <p class='error_message'> <?php echo $error_message; ?> </p>
        <?php } ?>
        <div>
            <label for="email">Adresse Mail</label>
            <input type="email" name="email" id="email" placeholder="john.doe@gmail.com">
        </div>
        <div>
            <label for="mdp">Mots de passe</label>
            <input type="password" name="mdp" id="mdp">
        </div>
        <button type="submit" name="submit">Valider</button>
        <p>Vous n'avez pas de compte ? <a href="index.php">S'inscrire</a></p>
    </form>
</body>
</html>