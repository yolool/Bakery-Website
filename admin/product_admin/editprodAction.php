<?php
require("connexion.php");

$nomFichier = $_FILES['photo']['name']; 
$location = "images/";
$tempEmplacement = $_FILES['photo']['tmp_name'];

move_uploaded_file($tempEmplacement, $location . $nomFichier);

$editprod = $connexion->prepare("UPDATE produit SET Nomproduit=?,Prix=?,Quantite=?,`Description`=?,photo=? WHERE Idproduit=?");
$editprod->execute(array($_POST['nomproduit'], $_POST['prix'], $_POST['quantite'], $_POST['description'],$_POST['Idproduit'],$location . $nomFichier));

header("Location:afficherprod.php");
?>
