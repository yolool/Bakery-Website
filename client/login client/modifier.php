
<?php 
session_start();
require("connexion.php");

if(!isset($_SESSION['id'])){
    header('location:index.php');
}
$reclient=$connexion->prepare("SELECT * FROM client where Idclient=?");
$reclient->execute(array($_SESSION['id']));
$lighne=$reclient->fetch(PDO::FETCH_OBJ);
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

<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section class="order" id="order">

<h1 class="heading"><span>LOGIN</span> now </h1>

<div class="row">

    <div class="image">
        <img src="../images/order.gif" alt="">
    </div>

    <form action="modifierAction.php" method="POST">

        <div class="inputBox">
            <input type="text" name="prenom" placeholder="first name" value="<?php echo $lighne->Prenomclient ?>">
            <input type="text" name="nom" placeholder="last name" value="<?php echo $lighne->Nomclient ?>">
        </div>

        <div class="inputBox">
            <input type="email" name="email" placeholder="email address" value="<?php echo $lighne->Emailclient ?>" required>
            <input type="number" name="nombre" placeholder="phone number" value="<?php echo $lighne->Emailclient ?>">
        </div>

        <div class="inputBox">
            <input type="text" name="ville" placeholder="Ville" value="<?php echo $lighne->ville ?>">
            <input type="number" name="dateN" placeholder="Date de Naissance" value="<?php echo $lighne->Age ?>">
        </div>
        <div class="inputBox">
            <input type="password" name="password" placeholder="Mot de pass" value="<?php echo $lighne->Passwordclient ?>" required>
            <input type="password" name="password2" placeholder="Confirmer Mot de pass" value="<?php echo $lighne->Passwordclient?>" required>
        </div>
        <textarea placeholder="your address" name="adress" id="" cols="30" rows="5" ><?php echo $lighne->Adresseclient ?></textarea>
        <input type="submit" value="Envoyer" class="btn">
    </form>

</div>

</section>



</body>
</html>