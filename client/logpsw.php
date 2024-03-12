<?php
session_start();

?>
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

<h1 class="heading"><span>LOGIN</span> now </h1>

<div class="row">

    <div class="image">
        <img src="images/order.gif" alt="">
    </div>

    <form action="logpswAction.php" method="POST">

        <div class="inputBox">
        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="Email">
            
        </div>

        <div class="inputBox">
            <input type="password"  name="psw" placeholder="mot de pass">
          
        </div>
        <div class="inputBox">
            <input type="submit" style="background-color:pink" name="env" value="Envoyer">
          
        </div>

</div>

</section>



</body>
</html>
