<?php 
session_start();
if(isset($_GET['msg'])){
    echo "<script>alert('la command succes')</script>";
}
if(!isset($_SESSION['id'])){
    header('location:../acueille.php');
}
require("connexion.php");
$affprod=$connexion->prepare("SELECT * FROM produit ");
$affprod->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        img {
            max-width: 50px;
            max-height: 50px;
        }

        button {
            padding: 6px 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        button a:hover {
            text-decoration: underline;
        }
        .ac{
            float: right;
        }
    </style>
</head>
<body>
    <button><a href="addprod.php">Add Product</a></button>
    <button class=ac><a href="../acueille.php">home</a></button>

    <table>
        <tr>
            <th>Idproduit</th>
            <th>Nomproduit</th>
            <th>Prix</th>
            <th>Quantite</th>
            <th>photo</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php
        while($ligne=$affprod->fetch(PDO::FETCH_OBJ)){
        ?>
        <tr>
            <td><?php echo $ligne->Idproduit ; ?></td>
            <td><?php echo $ligne->Nomproduit ; ?></td>
            <td><?php echo $ligne->Prix ; ?></td>
            <td><?php echo $ligne->Quantite ; ?></td>
            <td><img src="<?php echo $ligne->photo;?>"></td>
            <td><?php echo $ligne->Description ; ?></td>
            <td><button><a href="deleteprod.php?Idproduit=<?php echo $ligne->Idproduit;?>">Delete</a></button></td>
            <td><button><a href="editprod.php?Idproduit=<?php echo $ligne->Idproduit;?>">Edit</a></button></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>
