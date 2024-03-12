<?php
require("connexion.php");
$reqselcom = $connexion->prepare("SELECT * FROM command ");
$reqselcom->execute();
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

        button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        button a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
<button class=ac><a href="../acueille.php">home</a></button>
    <table>
        <tr>
            <th>Idcommande</th>
            <th>datecommande</th>
            <th>Statutcommande</th>
            <th>Prixcommand</th>
            <th>Adresselivraison</th>
            <th>Idclient</th>
            <th>annuler</th>
            <th>confirmer</th>
            <th>livrer</th>
            <th>supprimer</th>
        </tr>
        <?php while ($ligne = $reqselcom->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $ligne->Idcommande; ?></td>
                <td><?php echo $ligne->datecommande; ?></td>
                <td><?php echo $ligne->Statutcommande; ?></td>
                <td><?php echo $ligne->Prixcommand; ?></td>
                <td><?php echo $ligne->Adresselivraison; ?></td>
                <td><?php echo $ligne->Idclient; ?></td>
                <td><button><a href="annuler.php?Idcommande=<?php echo $ligne->Idcommande; ?>">annuler</a></button></td>
                <td><button><a href="confirme.php?Idcommande=<?php echo $ligne->Idcommande; ?>">confirme</a></button></td>
                <td><button><a href="livre.php?Idcommande=<?php echo $ligne->Idcommande; ?>">livrer</a></button></td>
                <td><button><a href="supp.php?Idcommande=<?php echo $ligne->Idcommande; ?>">delete</a></button></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
