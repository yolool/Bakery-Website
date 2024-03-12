<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="order" id="order">

<h1 class="heading"><span>Command</span></h1>

<div class="row">

    <div class="image">
        <img src="images/order.gif" alt="">
    </div>

    <form action="CommandAction.php" method="POST">

        <div class="inputBox">
            <input type="text"  value="Nom :" disabled >
            <input type="text" name="nom" value="Ahmed"  placeholder="last name">
        </div>

        <div class="inputBox">
        <input type="text"  value="DATE:" disabled >
            <input type="text" name="date"  value="<?php $date = new DateTime();  echo $date->format('Y-m-d');?>"  placeholder="last name">
        </div>

        <div class="inputBox">
        <input type="text" value="PRIX TOTAL:" disabled >
            <input type="text" name="prix" value="<?php  echo $_GET['sum'] ?> DH " >
        </div>
     
        <textarea placeholder="your address" name="adress" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Commander" class="btn">
    </form>

</div>

</section>



</body>
</html>