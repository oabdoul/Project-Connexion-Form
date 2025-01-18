<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
    <form action="submit-login.php" method="POST">
        <h1>Inscription</h1>
        <div>
            <label for="username">Nom et Prenom</label>
            <input type="text" name="username" id="username" placeholder="John Doe">
        </div>
        <div>
            <label for="email">Adresse Mail</label>
            <input type="email" name="email" id="email" placeholder="john.doe@gmail.com">
        </div>
        <div>
            <label for="mdp">Mots de passe</label>
            <input type="password" name="mdp" id="mdp">
        </div>
        <button type="submit" name="submit">Valider</button>
        <p>Vous avez déjà un compte ? <a href="connexion.php">Se connecter</a></p>
    </form>
</body>
</html>