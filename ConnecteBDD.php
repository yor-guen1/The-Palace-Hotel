<?php 
//pont de la bases de donnes vers php
//example1

/* $bdd=new PDO("mysql:host=localhost;dbname=example1;charset=utf8",
              "root",""); */

// example2

//try catch  en cas derruer au serveur lors dhebergement 
              try {
              	$host="mysql:host=localhost;dbname=id10413500_palace_hotel;charset=utf8";
$login="id10413500_admin007";
$mdp="admin007";
//en cas derreur dans la requete it shows where is the erreur exactly
$erreur=array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION);
 $bdd=new PDO($host,$login,$mdp,$erreur);
              	
              } catch (Exception $e) {
              	die("erreur".$e->getMessage());
              	
              }

 ?>