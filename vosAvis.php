<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Palace hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css-->
    
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--pour la fav icon-->
    <link rel="icon" href="images/favicon.png" />
    <!--js-->

    
</head>
<body>
    <!--la barre de navigation-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!--le header-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> PALACE HOTEL</a>
            </div>
            <!--la navigation-->
            <div id="menu" class="collapse navbar-collapse">
                <ul class=" liens nav navbar-nav">
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="chambres.php">CHAMBRES</a></li>
                    <li class="active"><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            
            <!--login-->
            
                 <?php 
            if (isset($_SESSION["auth"]) && $_SESSION["auth"]==true) {   
                echo '  <ul class="nav navbar-nav navbar-right ">
                    <li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> '.$_SESSION["user_name"].'</a></li>
                    <li><a href="LOGOUT.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                </ul>';
            } else{
                echo '  <ul class="nav navbar-nav navbar-right ">
                    <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Inscriptions</a></li>
                    <li><a href="connexion.php#connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                </ul>';
            }
            ?>
            </div>
        </div>
    </nav>
    <!-- le header de notre page-->
    <section id="about" class="container-fluid">
            <!--insertion du logo-->
        <div class="row">
            <div class="profile-picture">
                <p>
                   <a href="images/logo.png"><img src="images/logo_mini.png"
                     alt="logo" title="logo"></a>
                </p>
            </div>
            <!-- l'entete-->
            <div class="heading">
                <h1><em>Palace Hotel <br />Bejaia 06</em></h1>
                <h3>25 rue de la liberté</h3>
            </div>
            <a class="button1" href="reservations.php">Reserver</a>
        </div>   
    </section>
    <!--about-->
    <div class="container">
        <h2 class="heading-title  text-center">Vos avis</h2>
        <div id="avis" class="avis">
                <form id="formulaire" class="form-inline" method="post" action="insertavis.php">
                        <div class="form-group">
                            <label for="pseudo">psudo</label>
                            <!--pour desactiver quand tes connecter et tu commente avec autre username -->
                            <?php if (isset($_SESSION["auth"]) && $_SESSION["auth"]==true) {
                                echo '<input id="pseudo" type="text" name="pseudo" required class="form-control"value="'.$_SESSION["user_name"].'"required disabled >'; 
                            }?>
                            
                        </div>
                        <div class="form-group">
                            <label for="msg">message</label>
                            <input id="msg" type="text" name="msg" required class="form-control">
                        </div>	
                        <?php 
                        //pour le bouttonn commenter il va etre desactiver si tes pas connecter  
                        if (isset($_SESSION['auth']) && $_SESSION['auth']==true) {
                           echo (' <button id="btn" type="submit" class="btn btn-primary btn-lg">Commenter</button>');
                             
                         }else{
                            echo ('<button id="btn" type="submit" class="btn btn-primary btn-lg " disabled>Commenter</button>');
                         } 
                         ?>
                        
                </form>		
                <div id="commentaire" class="row">
                    <?php
                      include("ConnecteBDD.php");
//la requette 
//-> cest lappele de fonction au lieu de . en fait ->
//query methode qui  fait la demande a la bdd 
$reponse=$bdd->query("SELECT * FROM avis");
//fetch va decouper la reponse ligne par ligne et elle les metre a reponse si elle termine on sort de la condition
//fatch takas element par element i reponse bash asma adfakn atafaggh ggh la condition
//donnee est un taleau qui recoit les element de la bdd
while ($donnes=$reponse->Fetch()) {
    echo ('<blockquote id="block"><h3>'.$donnes["pseudo"].'</h3>').('<p><h4>commentaire</h4>'.$donnes["commentaire"].'</p>').(' date : '.$donnes["datecom"].'</blockquote>').'<div id="tri"></div><br> ';
}
//vider la variable reponse pour lutiliser autre fois
$reponse->closeCursor(); 
                     ?>
                </div>
        </div>
    </div>
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Palace Hotel 2019.
            </p>
    </footer>
    
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/jquery/jquery.min.js"></script>
</body>
</html>