<?php
require("connexion.php");

if(isset($_GET['Idclient'])){
require("connexion.php");
$declient=$connexion->prepare("DELETE FROM client where Idclient=?");
$declient->execute(array($_GET['Idclient']));}
header("location:client.php")





?>