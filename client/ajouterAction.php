<?php 
require("connexion.php");
if(!isset($_GET['id'])){
    header("location:cart.php");
}
session_start();
$reqselctcart=$connexion->prepare("INSERT INTO cart(idproduit,idclient)  VALUES (?,?)");
$reqselctcart->execute(array($_GET['id'],$_SESSION['id']));
header('location:cart.php');
?>