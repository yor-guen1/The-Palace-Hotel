<?php 
session_start();
try {
	include('ConnecteBDD.php');
//ce coté est pour le code les variable quon declare au page reservation sont les mm ici
	//ici c post car on insert on ajout des chose a la bdd
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$nbr=$_POST["nbr"];
$date=$_POST["date"];
$type=$_POST["type"];
//ce coté est pour le code les variable quon declare a LA  BASE DE DONNEE reservation sont les mm ici
$insert=$bdd->prepare("INSERT INTO reservation(nom,prenom,email,tel,nbrpersonne,datereserve,typechambre) VALUES(?,?,?,?,?,?,?)");
//ce coté est pour le code les variable quon declare au page reservation sont les mm ici
$insert->execute(array($nom,$prenom,$email,$tel,$nbr,$date,$type));
//pour terminer linsertion
$insert->closeCursor();
$_SESSION["reservation"]=1;

//pour y aller a reservation quan on termine
header("location:reservations.php");
} catch (Exception $e) {
	$_SESSION["reservation"]=0;
	header("location:reservations.php");

}

 ?>