<?php 
// Inclure des fichiers externes
include (__DIR__.'/databaseconnect.php');


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
    <div class="container">
        <div class="entete">
            <h1><?php echo $_COOKIE['username']; ?></h1>
            <a href="connexion.php">Deconnexion</a>
        </div>
        

        <p>Vous êtes connecté <?php echo $_COOKIE['username']; ?></p>
        <p>Bienvenue sur votre page.</p>
    </div>
</body>
</html>