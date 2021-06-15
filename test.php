<!DOCTYPE html>
<html>
    <head>
        <title>Connexion / Inscription</title>
    </head>
    <body>
        <div>
            <h1>Inscription</h1>
        </div>
        <form action="inscription.php" method="POST"> 
            <input type="hidden" name="token_contact" value="
                <?php 
                    $token_contact = hash('sha512', uniqid()); 
                    echo $token_contact; 
                ?>
            ">
            <div>
                <input type="text" name="nom" placeholder="Votre nom">
            </div>
            <div>
                <input type="text" name="email" placeholder="Votre email">
            </div>
            <div>
                <input type="password" name="password" placeholder="Votre mot de passe">
            </div>
            <div>
                <input type="submit" value="S'inscrire">
            </div>
            <p name="error"></p>
        </form>
        <hr></hr>
        <div>
            <h1>Connexion</h1>
        </div>
        <form action="connexion.php" method="POST">
            <input type="hidden" name="token_contact" 
            value="
                <?php 
                    $token_contact = hash('sha512', uniqid());
                    $_SESSION["token_contact"] = $token_contact; 
                    echo $token_contact; 
                ?>
            "> 
            <div>
                <input type="text" name="email" placeholder="Votre email">
            </div>
            <div>
                <input type="password" name="password" placeholder="Votre mot de passe">
            </div>
            <div>
                <a href="http://localhost/formulaire/forgetpassword.php">Mot de passe oublié</a>
            </div>
            <div>
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </body>
</html>