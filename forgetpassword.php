<!DOCTYPE html>
<html>
    <head>
        <title>Mot de passe oublié</title>
    </head>
    <body>
        <h1>Réinitialisation du mot de passe</h1>
        <form method="POST" action="reset.php">
            <div>
                Entrez votre email
                <input type="text" name="email" placeholder="Votre email">
            </div>
            <br>
            <div>
                Votre nouveaux mot de passe
                <input type="password" name="password1">
            </div>
            <br>
            <div>
                Confirmer votre nouveaux mot de passe
                <input type="password" name="password2">
            </div>
            <input type="submit" value="Envoyez">
        </form>
        <div>
            <a href="http://localhost/formulaire/test.php">Retour à la page d'acceuil</a>
        </div>
    </body>
</html>