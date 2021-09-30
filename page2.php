<?php
    session_start();
    include 'connexion-bdd.php';
    $sessionid = session_id();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Ma page</title>
    </head>
    <body>
        <header>
            <a class="fas fa-sign-out-alt" href="logout.php">Logout</a>
        </header>
        <section>
            <div>
                <?php echo "<h1>Bonjour</h1>" . $sessionid;?>
            </div>
        </section>
        <footer>
        </footer>
    </body>
</html>
