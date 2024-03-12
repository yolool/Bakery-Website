<?php
session_start();
if(!isset( $_SESSION['id'])){
    header('location:login Admin/index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bakery Website</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
    
    <!-- header -->

    <header class="header">
    <h1><?php if(date("H")>6 and date("H")<18){
            
            echo "BONJOUR lhaj l3tmani ";
            
    } else{
        echo "BONSOIR lhaj l3tmani"; 
    }?> </h1>
        <a href="#" class="logo">  <i class="fas fa-bread-slice"></i>  Lhaj L3tmani </a>

        <nav class="navbar">
            <a href="product_admin/afficherprod.php" >afficherproduit</a>
            <a href="commend_client/affichercom.php" >affichier commend</a>
            <a href="client_admin/client.php" >afficher clien</a>
            <a href="deconnexion.php" onclick="myFunction()" class="btn">Desconect</a>
          



<script>
function myFunction() {
  confirm("confermer");
}
            </script>
            
        </nav>