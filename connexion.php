<?php
    include "connexion-bdd.php";
    $id_user = "";
    if(isset($_POST["email"])&&$_POST["email"] != ""){
        $sql = "SELECT * FROM `user` WHERE `email` = '" . $_POST["email"] . "'";
        $req = $bdd_connect->prepare($sql) or die(print_r($bdd_connect->errorInfo()));
        $req->execute();
        $nbre_result = $req->rowCount();
        $req->closeCursor();
        if($nbre_result==1){
            if(isset($_POST["password"],$_POST["token_contact_connexion"])&&$_POST["password"]!= ""){
                $sql = "SELECT * FROM `user` WHERE `email` = '" . $_POST["email"] . "'";
                foreach($bdd_connect->query($sql) as $ligne){
                    $id_user = $ligne["id_user"];
                    $passord = $ligne["password"];
                };
                $mdp_verify = password_verify($_POST["password"],$passord);
                if($mdp_verify){
                    header('Location: http://localhost/formulaire/page2.php');
                }
                else{
                    echo "L'email ou le mot de passe n'est pas valide hjhjkhujkhjkhjk:)";
                    ?>
                        <a href="http://localhost/formulaire/test.php">Retour à la page d'acceuil</a>
                    <?php
                }
            }
        }
        else{
            echo "Oups :( l'email n'est pas connu ! Si vous n'avez pas de compte, inscrivez vous en haut";
            ?>
                <a href="http://localhost/formulaire/test.php">Retour à la page d'acceuil</a>
            <?php
        }
    }
    else{
        header('Location: http://localhost/formulaire/test.php');
    }
?>