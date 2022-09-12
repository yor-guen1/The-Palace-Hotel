<?php 
session_start();
//connexion a la base de donnees

//try catch pour en cas dune interruption 
try {
	include("ConnecteBDD.php");
$pseudo=$_POST["pseudo"];
$mdp=$_POST["mdp"];
//si on veut changer lordre on mit le nouveau ordre avant VALUES ex (id,mdp,pseudo) au lieux que da la bddquon a fait (id,pseudo,mdp)
//INSERT INTO pour inserer a la BDD
//insert cest just une variable 
//prepare et execute cest comme query mais  pour eviter le piratage car on query si a la pace de nom et prenom on envoie un requuete il rond tt les infos des utilisateurs
$insert=$bdd->prepare("INSERT INTO utilisateurs (pseudo,mdp) VALUES(?,?)");
$insert->execute(array($pseudo,$mdp)) ;
$insert->closeCursor();
//condition sil a reussi a sinscrire 
$_SESSION["inscrire"]=1;
header("location:connexion.php");
}
//condition sil na pas reussi a sinscrire
 catch (Exception $e) {
$_SESSION["inscrire"]=0;
header("location:inscription.php");
 }
 ?>