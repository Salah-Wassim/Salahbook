<?php
    try{
        $bdd_connect = new PDO("mysql:host=localhost;dbname=formulaire", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }catch(Exception $erreur){
        die("error: " . $erreur->getMessage());
    };
?>
