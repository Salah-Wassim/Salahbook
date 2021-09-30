<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <body>
        <?php 
            session_unset();

            session_destroy();
        ?>
        <h2>Vous êtes déconnecté</h2>
        <a href="index.php">Revenir à la page de connexion</a>
    </body>
</html>
