<?php 
try{
    $connexion=new PDO("mysql:host=localhost;dbname=patisserie;port=3306","root","");
}catch(Exception $e){
      echo "Ereur :".$e;
}