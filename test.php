<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta Content-Type="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Connexion / Inscription</title>
    </head>
    <body>
        <section class="formulaire">
            <section class="inscription">
                <div class="title-contain">
                    <h1>Inscription</h1>
                </div>
                <form action="inscription.php" method="POST">
                    <input class="form-token" type="hidden" name="token_contact_inscription" value="
                        <?php 
                            $token_contact_inscription = hash('sha512', uniqid());
                            $_SESSION["token_contact_inscription"] = $token_contact_inscription; 
                            echo $token_contact_inscription; 
                        ?>
                    ">
                    <div class="form-input">
                        <input type="text" name="nom" placeholder="Votre nom">
                    </div>
                    <div class="form-input">
                        <input type="text" name="email" placeholder="Votre email">
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Votre mot de passe">
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="S'inscrire">
                    </div>
                    <p name="error"></p>
                </form>
            </section>
            <section class="connexion">
                <div class="title">
                    <div class="title-contain">
                        <h1>Salahbook</h1>
                        <p>Avec SalahBook, partagez et restez en contact avec votre entourage.</p>
                    </div>
                </div>
                <section class="form-container-ext">
                    <form action="connexion.php" method="POST">
                        <input class="form-token" type="hidden" name="token_contact_connexion" 
                        value="
                            <?php 
                                $token_contact_connexion = hash('sha512', uniqid());
                                $_SESSION["token_contact_connexion"] = $token_contact_connexion; 
                                echo $token_contact_connexion; 
                            ?>
                        "> 
                        <div class="form-input">
                            <input class="input-text" type="text" name="email" placeholder="Adresse e-mail">
                        </div>
                        <div class="form-input">
                            <input class="input-text" type="password" name="password" placeholder="Mot de passe">
                        </div>
                        <div class="form-submit">
                            <input id="submit" type="submit" value="Connexion">
                        </div>
                        <div class="form-link">
                            <a href="http://localhost/formulaire/forgetpassword.php">Mot de passe oublié ?</a>
                        </div>
                        <hr>
                        <div class="btn">
                            <button class="btn-cpmt">Creer un compte</button>
                        </div>
                    </form>
                </section>
            </section>
        </section>
        <footer>
            <p> &copy; Salah-Wassim ARFA - Tous droit réservés</p>
        </footer>
    </body>
</html>