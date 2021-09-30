<?php
    include "connexion-bdd.php";
    if(isset($_POST["email"]) && $_POST["email"] != ""){
        $sql = "SELECT * FROM `user` WHERE `email` = '" . $_POST["email"] . "'";
        $req = $bdd_connect->prepare($sql) or die(print_r($bdd_connect->errorInfo));
        $req->execute();
        $nbre_result = $req->rowCount();
        $req->closeCursor();
        if($nbre_result == 0){
            if(isset($_POST["nom"])&&isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["token_contact_inscription"])){
                if($_POST["nom"] != "" &&$_POST["email"]!=""&& $_POST["password"]!=""){
                    $Vemail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
                    if(filter_var($Vemail, FILTER_VALIDATE_EMAIL)){

                        $mdp_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

                        $sql = "INSERT INTO `user`(`id_user`, `nom`, `email`, `password`) VALUES (NULL, '" . $_POST["nom"] . "', '" . $_POST["email"] . "', '" . $mdp_hash . "')";
                        $req = $bdd_connect->prepare($sql) or die(print_r($bdd_connect->errorInfo()));
                        $req->execute();
                        $nbre_result = $req->rowCount();
                        $req->closeCursor();
                    }
                }
            }
            header('Location: http://localhost/formulaire/page2.php');
        }
        else{
            echo "Oups :( Il semble que vous soyez déjà connecté";
        }
    }
    else{
        header('Location: http://localhost/formulaire/index.php');
    }
?>