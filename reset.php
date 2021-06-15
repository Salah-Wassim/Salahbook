<?php
    include "connexion-bdd.php";
    $id_user = "";
    if(isset($_POST["email"]) && $_POST['email'] != ""){
        $sql = "SELECT * FROM `user` WHERE `email` = '" . $_POST["email"] . "'";
        $req = $bdd_connect->prepare($sql) or die(print_r($bdd_connect->errorInfo()));
        $req->execute();
        $nbre_result = $req->rowCount();
        $req->closeCursor();
        if($nbre_result == 1){
            if(isset($_POST["password1"]) && $_POST['password1'] != ""){
                if(isset($_POST["password2"]) && $_POST['password2'] != ""){
                    if($_POST["password1"] === $_POST["password2"]){
        
                        $mdp_hash = password_hash($_POST['password1'], PASSWORD_DEFAULT);
        
                        $sql = "SELECT * FROM `user` WHERE `email` = '" . $_POST["email"] . "'";
                        foreach($bdd_connect->query($sql) as $ligne){
                            $id_user = $ligne["id_user"];
                            $password = $ligne["password"];
                        };
                        if($password){
                            $sql = "UPDATE `user` SET `password` = '" . $mdp_hash . "' WHERE id_user = $id_user";
                            $req = $bdd_connect->prepare($sql) or die(print_r($bdd_connect->errorInfo()));
                            $req->execute();
                            echo "Votre mot de passe à bien été enregistré :)";
                            ?>
                                <a href="http://localhost/formulaire/test.php">Retour à la page précédente</a>
                            <?php
                        }
                    }
                    else{
                        echo "Attention, les deux mots de passe ne correspondent pas !";
                        ?>
                            <a href="http://localhost/formulaire/forgetpassword.php">Retour à la page précédente</a>
                        <?php
                    }
                }
            }
            else{
                header('Location: http://localhost/formulaire/forgetpassword.php');
            }
        }
        else{
            echo "Oups :( Aucun email de ce type n'est connu !";
            ?>
                <a href="http://localhost/formulaire/forgetpassword.php">Retour à la page précédente</a>
            <?php
        } 
    }
    else{
        echo "Veuillez remplir tous les champs du formulaire s'il vous plaît !";
        ?>
            <a href="http://localhost/formulaire/forgetpassword.php">Retour à la page précédente</a>
        <?php
    } 
?>