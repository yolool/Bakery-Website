<?php 
require("connexion.php");
session_start();
$req=$connexion->prepare('UPDATE client set Prenomclient=?,Nomclient=?,Adresseclient=?,Emailclient=?,Passwordclient=?,Age=?,ville=? where Idclient=?');
$req->execute(array($_POST['prenom'],$_POST['nom'],$_POST['adress'],$_POST['email'],$_POST['password'],$_POST['dateN'],$_POST['ville'],$_SESSION['Id']));
echo $_SESSION['Id'];
header("location:../index.php");


?>