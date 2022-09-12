<?php 
session_start();
//pour detruire la session
session_destroy();
//header(location) en php cest pour envoyer a un site  et c pour y aller directement au site volu sans cliquer 
header("location:connexion.php#connexion");
 ?>