<?php
require("connexion.php");
if(isset($_GET['Idcommande'])){
require("connexion.php");
$ancom=$connexion->prepare("UPDATE command SET Statutcommande='LIVRER' where Idcommande=?");
$ancom->execute(array($_GET['Idcommande']));}
header("location:affichercom.php")
?>