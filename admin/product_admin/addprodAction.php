<?php
session_start();
if(isset($_GET['msg'])){
    echo "<script>alert('la command succes')</script>";
}
if(!isset($_SESSION['id'])){
    header('location:../acueille.php');
}
require("connexion.php");

$nomFichier = $_FILES['photo']['name']; 
$location = "images/";
$tempEmplacement = $_FILES['photo']['tmp_name'];

move_uploaded_file($tempEmplacement, $location . $nomFichier);

$addprod = $connexion->prepare("INSERT INTO produit (`Nomproduit`, `Prix`, `Quantite`, `Description`, `photo`) VALUES (?, ?, ?, ?, ?)");
$addprod->execute(array($_POST['nomproduit'], $_POST['prix'], $_POST['quantite'], $_POST['description'], $location . $nomFichier));

header("Location:addprod.php")
?>
