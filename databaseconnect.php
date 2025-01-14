<?php

$servername = "localhost";
$username = "root";
$password = "";

// Gestion de erreur de connexion à la base de données
try{
	// Se connecter à la base données
	$bdd = new PDO( 'mysql:host=localhost;dbname=utilisateurs;charset=utf8', $username, $password);
	// Se mettre en ERRMODE pour donner le type d'erreur
	// Spéfication du type d'erreur ERRMODE_EXCEPTION
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie !";
}
// Récupération de l'erreur dans la variable e
// Afficher le message d'erreur
catch(PDOException $e){
    echo "Erreur :".$e ->getMessage();
}


?>