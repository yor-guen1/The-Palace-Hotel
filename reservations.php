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
     <?php 
    //pour la condition de reussite de connnexion (en cas diterupption )
     //ici c session en prend de la supervar session elle deja existe
       if (isset($_SESSION["reservation"]) && $_SESSION["reservation"]==0) {
         echo '<script> alert("echec de reservation"); </script>';
         //10 just un chiffre pour casser la condition
         $_SESSION["reservation"]=10;
              } else if(isset($_SESSION["reservation"]) && $_SESSION["reservation"]==1){
                echo '<script> alert("Reservation reussit"); </script>';
                 $_SESSION["reservation"]=10;
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
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>PALACE HOTEL</a>
            </div>
            <!--la navigation-->
            <div id="menu" class="collapse navbar-collapse">
                <ul class=" liens nav navbar-nav">
                    <li><a href="index.php">ACCUEIL</a></li>
                    <li><a href="chambres.php">CHAMBRES</a></li>
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li class="active"><a href="reservations.php">RESERVATIONS</a></li>
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
                <h1><em>Palace hotel <br />Bejaia 06</em></h1>
                <h3>25 rue de la liberté</h3>
            </div>
        </div>   
    </section>
    <!--about-->
    <div class="container">
        <h2 class="heading-title  text-center">RESERVATIONS</h2>
        <div class="col-xs-offset-3 col-xs-6">
            <form id="form" class="form-horizontal text-center" method="post" action="insertreservation.php">
                <div>
                    <div class="form-group">
                        <label for="nom" class="control-label col-sm-2">Nom:</label>
                        <input class="col-sm-10 form-control" id="nom" type="text" name="nom" placeholder="Enter Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="control-label col-sm-2">Prenom:</label>
                        <input class="col-sm-10 form-control" id="prenom" type="text" name="prenom" placeholder="Enter Votre prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email:</label>
                        <input class="col-sm-10 form-control" id="email" type="text" name="email" placeholder="Enter Votre email" required>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="control-label col-sm-2">Tel:</label>
                        <input class="col-sm-10 form-control" id="tel" type="text" name="tel" placeholder="Enter Votre numero de telephone" required>
                    </div>
                    <legend>Votre réservation</legend>
                    <div class="form-group">
                        <label for="nbr" class="control-label col-sm-2">personnes:</label>
                        <input class="col-sm-10 form-control" id="nbr" type="number" name="nbr" max="8" min="1" value="1" required>
                    </div>
                    <div class="form-group">
                        <label for="date" class="control-label col-sm-2">Le jour:</label>
                        <input class="col-sm-10 form-control" id="date" type="date" name="date"  required>
                    </div>
                    <div class="form-group">
                        <label for="type" class="control-label col-sm-2">Type chambres:</label>
                        <select class="form-control" name="type" id="type" class="col-sm-10">
                            <optgroup label="Chambres">
                                <option value="simple">Simple</option>
                                <option value="double">Double</option>
                               <option value="familiale">Familiale</option>
                               <option value="communicantes">Communicantes</option>
                               <option value="voisines">Voisines</option>
                               </optgroup>
                               <optgroup label="Suites">
                               <option value="simple">Simple</option>
                                <option value="presedentiel">Presedentiel</option>
                                </optgroup>
                                <optgroup label="Salles">
                                    <option value="conferences">Conferences</option>
                               <option value="sport">Sport</option>
                               <option value="fetes">Fetes</option>
                               <option value="pecine">Pecine</option>
                                </optgroup>
                        </select>
                    </div>
                <input id="valid-btn" class="btn btn-primary" type="submit" name="valider">
            </div>
            </form>
        </div>
    </div>
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Palace Hotel 2019.
            </p>
    </footer>
    
    
    <script src="js/form.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/jquery/jquery.min.js"></script>
</body>
</html>