<?php
session_start();
if(isset( $_SESSION['id'])){
    header('location:../acueille.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>insercription </title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="indexAction.php" method="Post">
                    <h2>Login Admin</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" >
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" >
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>
                    <button>Log in</button>
                    
                </form>
            </div>
            <?php if(isset($_GET['msg1'])){
                echo '<script>alert(\'les donner invalid \')</script>';
            } 
             if(isset($_GET['msg2'])){
                echo '<script>alert(\'les champs sont vide \')</script>';
            } ?>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>