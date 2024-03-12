<?php
require("connexion.php");
$editprod=$connexion->prepare("SELECT * FROM produit ");
$editprod->execute();
$ligne=$editprod->fetch(PDO::FETCH_OBJ)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>

        <form method="POST" action="editprodAction.php" enctype="multipart/form-data">
            <input type="hidden" name="Idproduit" value="<?php echo $ligne->Idproduit; ?>">

            <label for="nomproduit">Nom produit:</label>
            <input type="text" name="nomproduit" id="nomproduit" value="<?php echo $ligne->Nomproduit; ?>" required><br><br>

            <label for="prix">Prix:</label>
            <input type="number" name="prix" id="prix" value="<?php echo $ligne->Prix; ?>" required><br><br>

            <label for="quantite">Quantité:</label>
            <input type="number" name="quantite" id="quantite" value="<?php echo $ligne->Quantite; ?>" required><br><br>

            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo" required><br><br>

            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="<?php echo $ligne->Description; ?>" required><br><br>

            <input type="submit" value="Edit Product">
        </form>
    </div>
</body>
</html>
