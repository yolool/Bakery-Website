<?php
require("connexion.php");

session_start();
$selectcart=$connexion->prepare("SELECT cart.idproduit,Id,Nomproduit,photo,Description,Prix,count(*) as nomber,sum(Prix) as som FROM cart
 INNER JOIN produit ON produit.idproduit=cart.idproduit where cart.idclient=? Group by cart.idproduit ");
$selectcart->execute(array($_SESSION['id']));
$somme=0;

?>


  <!-- Bootstrap CSS v5.2.1 -->
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{
            font-size: large;

        }
    </style>
    <title>Document</title>
</head>
<body>
<br><center><h1>My Cart</h1></center><br>
    <table class="table table-striped table-danger " border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PHOTO</th>
            <th>DESCRIPTION</th>
            <th>QUANTETE</th>
            <th>PRIX</th>
            <th>Action</th>
        </tr>
        

        
    <?php 
    
    while($lighn=$selectcart->fetch(PDO::FETCH_OBJ)){   
    ?>
    <tr>
    <td><?php echo $lighn->idproduit  ?></td>
    <td><?php echo $lighn->Nomproduit  ?></td>
    <td><img class="img-thumbnail" width="40%" src="<?php echo $lighn->photo; ?>"></td>
    <td><?php echo $lighn->Description  ?></td>
    <td><?php echo $lighn->nomber  ?></td>
    <td><?php echo $lighn->Prix   ?> DH</td>
    <td><a href='supprimer.php?id=<?php echo $lighn->Id  ?>' >supprimer</td>
    <?php  $somme+=$lighn->som ; ?>
    
    </tr>
    <?php } ?>
    <tr>
        
        <td>TOTAL</td>
        <td><?php echo $somme  ?> DH</td>
        
    </tr>
    </table>
   <pre> <a  class="btn" href="index.php" role="button">Retour</a>            <a  class="btn" href="command.php?sum=<?php echo $somme  ?>" role="button">Continuer Command</a>
   </pre>

</body>
</html>