<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style2.css">
  <title>insercription </title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="indexAction.php" method="Post">
                    <h2>Login client </h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email"value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email']; } ?>" name="email" >
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" value="<?php if(isset($_COOKIE['password'])){
                            echo $_COOKIE['password']; } ?>" name="password" >
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input  type="checkbox" name="cokie">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>
                    <button>Log in</button>
                    <div class="register">
                        <p>Don't have a account <a href="login.php">Register</a></p>
                    </div>
                    </div>
            <?php if(isset($_GET['msg1'])){
                echo '<script>alert(\'les donner invalid \')</script>';
            } 
             if(isset($_GET['msg2'])){
                echo '<script>alert(\'les champs sont vide \')</script>';
            } ?>
        </div>
                </form>
            </div>
        </div>
    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>