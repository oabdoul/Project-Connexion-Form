<?php

$username = $_POST['username'];
$email = $_POST['email'];
$mpd = $_POST['password'];

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
        <h1>Bienvenue</h1>
        <p>Votre nom : <?php echo $username; ?></p>
        <p>Votre email: <?php echo $email; ?></p>
    </div>
</body>
</html>