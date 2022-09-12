<?php 
session_start();
 ?>
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
    <?php 
    //pour la condition de reussite de connnexion (en cas diterupption )
       if (isset($_SESSION["inscrire"]) && $_SESSION["inscrire"]==1) {
         echo '<script> alert("echec dinscription"); </script>';
         //10 just un chiffre pour casser la condition
         $_SESSION["inscrire"]=10;
              } 
               ?>
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
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            
            <!--login-->
            
                <ul class="nav navbar-nav navbar-right ">
                    <li class="active"><a href="inscription.php"><span class="glyphicon glyphicon-user"></span> Inscriptions</a></li>
                    <li ><a href="connexion.php#connexion"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                </ul>
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
        <h2 class="heading-title  text-center" id="connexion">Inscription</h2>
        <div id="avis" class="avis">
                <form id="formulaire" class="form-inline" method="post" action="INSERT.php">
                        <div class="form-group">
                            <label for="psudo">psudo</label>
                            <input id="pseudo" class="form-control" type="text" name="pseudo" required>
                        </div>
                        <div class="form-group">
                            <label for="mdp">mot de passe</label>
                            <input id="mdp" type="password" class="form-control" name="mdp" required>
                        </div>	
                        <button id="btn" type="submit" class="btn btn-primary btn-lg">S'inscrire</button>
                </form>		
        </div>
    </div>
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Palace Hotel 2019.
            </p>
    </footer>
    <script src="js/avis.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/jquery/jquery.min.js"></script>
</body>
</html>