<?php
    include "connexion-bdd.php";
    session_start();
    $id_session = session_id();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $id_session; ?></title>
    </head>
    <body>
        <div>
            <h2>Bonjour</h2>
        </div>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </body>
</html>