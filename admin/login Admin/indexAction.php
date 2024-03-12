<?php 
session_start();
require("connexion.php");
if(isset($_POST['email']) and isset($_POST['password'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])){
        $req=$connexion->prepare("SELECT Idadmin,Nomadmin,Prenomadmin  FROM admin where Emailadmin=? and passwordadmin=?");
        $req->execute(array($_POST['email'],$_POST['password']));
        $resultat=$req->fetch();
        if(!$resultat['Idadmin']){
            header("location:index.php?msg1");
            
        }else{
            $_SESSION['id']=$resultat['Idadmin'];
            $_SESSION['nom']=$resultat['Nomadmin'];
            $_SESSION['prenom']=$resultat['Prenomadmin'];
            header("location:../acueille.php");
        }

    }
    else{
        header("location:index.php?msg2");
    }
} ?>