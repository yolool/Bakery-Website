<?php
session_start();
require('connexion.php');
// $date = new DateTime(); 
// $date=$date->format('Y-m-d');
// $dateN=$_POST['dateN'];
// $age=date_diff($dateN, $date);
$req=$connexion->prepare("INSERT INTO client(Nomclient,Prenomclient,Adresseclient,Emailclient,Passwordclient,DateNaissance,ville,nombre) values (?,?,?,?,?,?,?,?)");
$req->execute(array($_POST['nom'],$_POST['prenom'],$_POST['adress'],$_POST['email'],$_POST['password'],$_POST['dateN'],$_POST['ville'],$_POST['nombre']));
header("location:index.php");
?>