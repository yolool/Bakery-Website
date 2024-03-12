<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Form</title>
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
        <h1>Add Product Form</h1>
        <form method="POST" action="addprodAction.php" enctype="multipart/form-data">
            <label for="nomproduit">Nom produit:</label>
            <input type="text" name="nomproduit" id="nomproduit" required>

            <label for="prix">Prix:</label>
            <input type="number" name="prix" id="prix" required>

            <label for="quantite">Quantité:</label>
            <input type="number" name="quantite" id="quantite" required>

            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo" required>

            <label for="description">Description:</label>
            <input type="text" name="description" id="description" required>

            <input type="submit" value="Add Product">
        </form>
    </div>
</body>
</html>
