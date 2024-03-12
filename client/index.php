<?php session_start();
if(isset($_GET['msg'])){
    echo "<script>alert('la command succes')</script>";
}
if(!isset($_SESSION['id'])){
    header('location:login client/index.php');
}
 require("connexion.php");
 $reproduit=$connexion->prepare("SELECT * FROM produit");
$reproduit->execute(); ?>
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

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!-- header -->

    <header class="header">
    <h1><?php if(date("H")>6 and date("H")<18){
            
            echo "BONJOUR ".strtoupper($_SESSION['prenom']);
            
    } else{
        echo "BONSOIR ".$_SESSION['prenom']; 
    }?> </h1>
        <a href="#" class="logo">  <i class="fas fa-bread-slice"></i>  Lhaj L3tmani </a>

        <nav class="navbar">
            <a href="#home" >home</a>
            <a href="#about" >about</a>
            <a href="cart.php" >product</a>
            <a href="#gallery" >gallery</a>
            
            
            
            <a href="login client/modifier.php" class="btn">PROFIL</a>
            <a href="login client/desconnect.php" onclick="myFunction()" class="btn">Desconect</a>
          



<script>
function myFunction() {
  confirm("confermer");
}
            </script>
            
        </nav>

        <div class="icons">
        <a href="cart.php" ><div  class="fas fa-shopping-cart"></div></a>
            
            <div id="menu-btn" class="fas fa-bars"></div>
            <div class="content">
                  
                   
                </div>
            </div>
        </div>

    </header>

    <!-- header end -->

    <!-- shopping cart -->
 
    <div class="cart-items-container">
       <select name="choix" id="">
        <option value=""></option>
       </select>
       <div id="close-form" class="fas fa-times"></div>
       <h3 class="title">checkout</h3>
       
       <div class="cart-item">
           <span class="fas fa-times"></span>
           <img src="images/cart-2.jpg" alt="">
           <div class="content">
               <h3>bakery item 2</h3>
               <div class="price">$15.99/-</div>
           </div>
       </div>

       <div class="cart-item">
           <span class="fas fa-times"></span>
           <img src="images/cart-3.jpg" alt="">
           <div class="content">
               <h3>bakery item 3</h3>
               <div class="price">$29.99/-</div>
           </div>
       </div>

       <a href="#" class="btn"> checkout </a>

   </div>

    <!-- shopping cart end-->

    <!-- home -->

    <section class="home" id="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/slider1.jpg) no-repeat;">
                    <div class="content">
                        <h3>we bake the world a better place</h3>
                        <a href="#" class="btn"> get started </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/slider2.jpg) no-repeat;">
                    <div class="content">
                        <h3>we bake the world a better place</h3>
                        <a href="#" class="btn"> get started </a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- banner -->

    <section class="banner">
        <img src="images/banner.png" alt="">
    </section>


    <!-- banner end-->

    <!-- about us -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about.png" alt="">
            </div>

            <div class="content">
                <h3>good things come to those <span>who bake </span> for others</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit veritatis sunt id modi quis in eveniet at! Vero iusto excepturi.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam molestiae maxime quibusdam rem necessitatibus optio maiores fugiat. Pariatur molestiae.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section>


    <!-- about us end-->

    <!-- product -->

    <section class="product" id="product">

        <h1 class="heading">our <span> products</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/product-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>apple pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>apple pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">$18.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
            <?php  
        
        while($lighne=$reproduit->fetch(PDO::FETCH_OBJ)){ ?>
         
         <div class="box">
                <div class="image">
                    <img src="<?php echo $lighne->photo ?>" alt="">
                </div>
                <div class="content">
                    <h3><?php echo $lighne->Nomproduit ?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">$<?php echo $lighne->Prix ?></span>
                    <a href="ajouterAction.php?id=<?php echo $lighne->Idproduit?>" class="btn">add to cart</a>
                </div>
            </div>

      
<?php
        }
        ?>


            

            <div class="box">
                <div class="image">
                    <img src="images/product-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>apple pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">$15.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>apple pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="price">$27.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/product-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>apple pie</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span class="price">$25.99</span>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>

        </div>

    </section>


    <!-- product end-->


    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h1 class="heading">our <span> gallery</span></h1>

        <div class="gallery-container">

            <a href="images/gallery1.jpg" class="box">
                <img src="images/gallery1.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery2.jpg" class="box">
                <img src="images/gallery2.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery3.jpg" class="box">
                <img src="images/gallery3.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery4.jpg" class="box">
                <img src="images/gallery4.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery5.jpg" class="box">
                <img src="images/gallery5.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

            <a href="images/gallery6.jpg" class="box">
                <img src="images/gallery6.jpg" alt="">
                <div class="icons"><i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>

    <!-- gallery end -->

    <!-- weekly promotions -->

    <section class="promotion">

        <h1 class="heading">weekly <span>promotions</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="content">
                    <h3>chocolat cake</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum earum tempore rerum totam necessitatibus ipsum.</p>
                </div>

                <img src="images/promotion1.png" alt="">
            </div>

            <div class="box">
                <img src="images/promotion2.png" alt="">
                <div class="content">
                    <h3>nut cake</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum earum tempore rerum totam necessitatibus ipsum.</p>
                </div>
                
            </div>

        </div>

    </section>

    <!-- weekly promotions ends -->

    <!-- team -->

    <section class="team" id="team">

        <h1 class="heading">our  <span>team</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/team-1.png" alt="">
                </div>
                <div class="content">
                    <h3>erica lacy</h3>
                    <p>CEO</p>
                    <div class="share">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/team-2.png" alt="">
                </div>
                <div class="content">
                    <h3>doe lacy</h3>
                    <p>manager</p>
                    <div class="share">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/team-3.png" alt="">
                </div>
                <div class="content">
                    <h3>john lacy</h3>
                    <p>manager</p>
                    <div class="share">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- team -->

    <!-- parallax -->

    <section class="parallax">

        <h1 class="heading">range of <span>products</span></h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/parallax-1.png" alt="">
                </div>
                <div class="content">
                    <h3>bread</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea minus laudantium placeat suscipit.</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-2.png" alt="">
                </div>
                <div class="content">
                    <h3>cakes</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea minus laudantium placeat suscipit.</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/parallax-3.png" alt="">
                </div>
                <div class="content">
                    <h3>donuts</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea minus laudantium placeat suscipit.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- parallax -->

    <!-- review -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/review-1.png" class="user" alt="">
                <h3>9oraydiss</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>la 3ando hadxi harban l9oryadiss</p>
            </div>

            <div class="box">
                <img src="images/review-2.png" class="user" alt="">
                <h3>lacy deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui architecto fuga, voluptatum a deleniti nostrum rerum illum quidem cupiditate odio perspiciatis.</p>
            </div>

            <div class="box">
                <img src="images/review-3.png" class="user" alt="">
                <h3>Spipa7</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p>hadxi 7ayl 3jbni bzafff 3anb9a nxrih chaque day khososan dik pank</p>
            </div>

        </div>

    </section>

    <!-- review -->

    <!-- order -->
<!-- order end -->

<!-- footer -->

<section class="footer">

    <div class="box-container">
    
        <div class="box">
            <h3>address</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias sit debitis.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    
        <div class="box">
            <h3>E-mail</h3>
            <a href="#" class="link">lhaj_l3tmani@gmail.com</a>
            <a href="#" class="link">Sidi_khalkhel@gmail.com</a>
        </div>
    
        <div class="box">
            <h3>call us</h3>
            <p>06 17 65 39 24</p>
            <p>+61 (2) 1478 2369</p>
        </div>
    
        <div class="box">
            <h3> opening hours</h3>
            <p>Monday - Friday: 9:00 - 22:00 <br> Saturday: 8:00 - 2:00 </p>
        </div>
    
    </div>
    
    <div class="credit">created by <span>HACK MAN and BLACK MAN</span> all rights reserved! </div>
    
    </section>
    






    <!-- footer ends -->

















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

    <script src="js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>


</body>
</html>