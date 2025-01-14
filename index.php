<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de connexion</title>
</head>
<body>
    <form action="submit-login.php" method="POST">
        <h1>Connexion</h1>
        <div>
            <label for="email">Adresse Mail</label>
            <input type="email" name="email" id="email" placeholder="abdoul@gmail.com">
        </div>
        <div>
            <label for="password">Mots de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button>Valider</button>
    </form>
</body>
</html>