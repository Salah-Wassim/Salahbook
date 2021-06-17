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
            <input type="hidden" name="token_contact_inscription" value="
                <?php 
                    $token_contact_inscription = hash('sha512', uniqid());
                    $_SESSION["token_contact_inscription"] = $token_contact_inscription; 
                    echo $token_contact_inscription; 
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
            <p>Avec SalahBook, partagez et restez en contact avec votre entourage.</p>
        </div>
        <form action="connexion.php" method="POST">
            <input type="hidden" name="token_contact_connexion" 
            value="
                <?php 
                    $token_contact_connexion = hash('sha512', uniqid());
                    $_SESSION["token_contact_connexion"] = $token_contact_connexion; 
                    echo $token_contact_connexion; 
                ?>
            "> 
            <div>
                <input type="text" name="email" placeholder="Votre email">
            </div>
            <div>
                <input type="password" name="password" placeholder="Votre mot de passe">
            </div>
            <div>
                <a href="http://localhost/formulaire/forgetpassword.php">Mot de passe oublié ?</a>
            </div>
            <div>
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </body>
</html>