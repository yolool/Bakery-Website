<?php
session_start();
if(isset($_GET['msg'])){
    echo "<script>alert('la command succes')</script>";
}
if(!isset($_SESSION['id'])){
    header('location:../acueille.php');
}
if(isset($_GET['Idproduit'])){
require("connexion.php");
$declient=$connexion->prepare("DELETE FROM produit where Idproduit=?");
$declient->execute(array($_GET['Idproduit']));}
header("location:afficherprod.php")
?>