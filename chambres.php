<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Palace Hotel</title>
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
                    <li class="active"><a href="chambres.php">CHAMBRES</a></li>
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            
            <!--login-->
            
                 <?php 
            if (isset($_SESSION["auth"]) && $_SESSION["auth"]==true) {   
                echo '  <ul class="nav navbar-nav navbar-right ">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> '.$_SESSION["user_name"].'</a></li>
                    <li><a href="LOGOUT.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
                </ul>';
            } else{
                echo '  <ul class="nav navbar-nav navbar-right ">
                    <li><a href="inscription.php"><span class="glyphicon glyphicon-plus"></span> Inscriptions</a></li>
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
            <a class="button1" href="res.php">Reserver</a>
        </div>   
    </section>
    <!--about-->
    <div class="container">
        <h2 class="heading-title text-center">Offres</h2>
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Chambres</h3>
				<ul class="list-unstyled">
					<li>Simple</li>
					<li>Double</li>
					<li>Familiale</li>
					<li>Communicantes</li>
					<li>Voisines</li>
				</ul>
            </div>
            <div class="col-md-6 text-center">
				<p>
                    <img style="width: auto;" src="images/fond.jpg" class="img-responsive img-thumbnail ">
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
				<p>
                    <img style="width: auto;" src="images/img3.jpg" class="img-responsive img-thumbnail ">
                </p>
            </div>
            <div class="col-md-6 text-center">
                <h3>Suites</h3>
                <dl>
                    <dt><b>Simple</b></dt><dd>chambre à coucher, salle de séjour,  salle à manger...</dd>
					<dt><b>Presedentiel</b></dt><dd>chambre à coucher, salle de séjour,  salle à manger, coffre fort, jacuzzi...</dd>
                </dl  >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Salles</h3>
				<ul class="list-unstyled">
					<li>Conferences</li>
					<li>Sport</li>
					<li>Fetes</li>
					<li>Pecine</li>
				</ul>
            </div>
            <div class="col-md-6 text-center">
                <p>
                    <img style="width: auto;" src="images/img4.jpg" class="img-responsive img-thumbnail ">
                </p>
            </div>
        </div>
    
        <div class="text-center">
            <a id="env" href="hotel.pdf">voir plus</a>
        </div>
        

    </div>
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Palace Hotel 2019.
            </p>
    </footer>
    <script src="Assets/jquery/jquery.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>