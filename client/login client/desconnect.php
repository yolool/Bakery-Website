<?php
session_start();
unset($_SESSION['Id']);
unset($_SESSION['prenom']);
session_destroy();
header("location:index.php");

?>