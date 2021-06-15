<?php
    include "connexion-bdd.php";
    session_start();
    $id_session = session_id();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page 2</title>
    </head>
    <body>
        <?php
            $id_user = "";
            $sql = "SELECT * FROM `user` WHERE `email` = '" . $_POST["email"] . "' ";
            foreach($bdd_connect->query($sql) as $ligne){
                $id_user = $ligne['id_user'];
                $nom = $ligne['nom'];
            }
            $_SESSION["nom"] = $nom;
            if(isset($_SESSION["nom"]) && $_SESSION["nom"] != ""){
                ?>
                    <h1>Bonjour <?php echo $_SESSION["nom"]; ?></h1>
                <?php
            }
            else{
                if($id_session){
                    ?>
                    <h1>Bonjour <?php echo $id_session; ?></h1>
                <?php
                }
            }
        ?>
        <div>
            <a href="logout.php">Logout</a>
        </div>
    </body>
</html>