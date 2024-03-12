<?php 
require("connexion.php");
session_start();
$reqsupp=$connexion->prepare("DELETE  FROM cart WHERE Id=?;");
$reqsupp->execute(array($_GET['id']));
header("location:cart.php")
?>