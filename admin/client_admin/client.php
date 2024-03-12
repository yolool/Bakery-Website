<?php
require("connexion.php");
$reqselclient = $connexion->prepare("SELECT * FROM client ");
$reqselclient->execute();
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

        th,
        td {
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

        button.ban {
            background-color: red;
        }
    </style>
</head>

<body>
<button class=ac><a href="../acueille.php">home</a></button>
    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adress</th>
            <th>Email</th>
            <th>Age</th>
            <th>ville</th>
            <th>banclient</th>
        </tr>
        <?php while ($ligne = $reqselclient->fetch(PDO::FETCH_OBJ)) { ?>
            <tr>
                <td><?php echo $ligne->Idclient; ?></td>
                <td><?php echo $ligne->Nomclient; ?></td>
                <td><?php echo $ligne->Prenomclient; ?></td>
                <td><?php echo $ligne->Adresseclient; ?></td>
                <td><?php echo $ligne->Emailclient; ?></td>
                <td><?php echo $ligne->Age; ?></td>
                <td><?php echo $ligne->ville; ?></td>
                <td><button class="ban"><a href="deleteclient.php?Idclient=<?php echo $ligne->Idclient; ?>">ban</a></button></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
