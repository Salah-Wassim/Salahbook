<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta Content-Type="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Connexion / Inscription</title>
    </head>
    <body>
        <section class="formulaire">
            <section id="ins" class="inscription">
                <button id="cross" class="btn-cross fas fa-times"></button>
                <div class="inscription-contain">
                    <div class="title-contain title-contain-inscription">
                        <h1>S'inscrire</h1>
                        <p>C'est rapide et facile<p>
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
                            <input class="input-text" type="text" name="nom" placeholder="Votre nom">
                        </div>
                        <div class="form-input">
                            <input class="input-text" type="text" name="email" placeholder="Votre email">
                        </div>
                        <div class="form-input">
                            <input class="input-text" type="password" name="password" placeholder="Votre mot de passe">
                        </div>
                        <div class="form-submit">
                            <input id="btn-nscrr" type="submit" value="S'inscrire">
                        </div>
                    </form>
                </div>
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
                            <a href="#" id="btn-cpmt">Creer un compte</a>
                        </div>
                    </form>
                </section>
            </section>
        </section>
        <footer>
            <p> &copy; Salah-Wassim ARFA - Tous droit réservés</p>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/form-inscription.js"></script>
    </body>
</html>