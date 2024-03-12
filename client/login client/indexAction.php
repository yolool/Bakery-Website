<?php 
session_start();
require("connexion.php");

if(isset($_POST['email']) and isset($_POST['password'])){
    if(!empty($_POST['email']) and !empty($_POST['password'])){
        $req=$connexion->prepare("SELECT Idclient,Nomclient,Prenomclient  FROM client where Emailclient=? and Passwordclient=?");
        $req->execute(array($_POST['email'],$_POST['password']));
        $resultat=$req->fetch();
        if(!$resultat['Idclient']){
            header("location:index.php?msg1");
        }else{
             if(isset($_POST['cokie'])){
                setcookie('email',$_POST['email'] , time() +365*24*3600);
                setcookie('password',$_POST['password'], time() + 365*24*3600);
            
             }
                
            $_SESSION['id']=$resultat['Idclient'];
           
            $_SESSION['prenom']=$resultat['Prenomclient'];
            header("location:../index.php?");
        }

    }
    else{
        header("location:index.php?msg2");
    }
} ?>