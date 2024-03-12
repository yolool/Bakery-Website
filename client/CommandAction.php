<?php 
require("connexion.php");

session_start();
$reqcommand=$connexion->prepare("INSERT INTO command(datecommande,Prixcommand,Adresselivraison,Idclient)  VALUES (?,?,?,?)");
$reqcommand->execute(array($_POST['date'],$_POST['prix'],$_POST['adress'],$_SESSION['id']));
header('location:index.php?msg');
?>