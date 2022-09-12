<?php 
session_start();
include('ConnecteBDD.php');
//jai changer post[pseudo] a session[username] pour le probleme de commenter avec un autre username
$pseudo=$_SESSION["user_name"];
$commentaire=$_POST["msg"];
//date une fonction deja preparer le format de date au choix 
//datedefault.... pour regler le temps
date_default_timezone_set("Africa/Algiers");
$dateact=date("Y-m-d H:i:s",time());
$insert=$bdd->prepare("INSERT INTO avis(pseudo,commentaire,datecom) VALUES(?,?,?)");
$insert->execute(array($pseudo,$commentaire,$dateact));
$insert->closeCursor();
header("location:vosAvis.php");
 ?>