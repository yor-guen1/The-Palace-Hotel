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
    
</head>
<body data-spy="scroll" data-target="#monmenu">
    <!--la barre de navigation-->
    <nav id="monmenu" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!--le header-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monmenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> PALACE HOTEL</a>
            </div>
            <!--la navigation-->
            <div id="monmenu" class="collapse navbar-collapse">
                <ul class=" liens nav navbar-nav">
                    <li class="active"><a href="index.php">ACCUEIL</a></li>
                    <li><a href="chambres.php">CHAMBRES</a></li>
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
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
        <div class="heading-title"><h2 class="text-center">ACCUEIL</h2></div>
        <div class="row">
                <section class="col-sm-8">
                        <blockquote class="text-justify">
                            <p>
                                Bienvenue chez <strong>PALACE HOTEL </strong>bejaia 06, nous hotel vous propose des chambres, suite et salles à votre goût <br />
                                meublée dans une ambiance traditionnelle. L'hotel est situé au 25 rue de la liberté près de<br />
                                la poste algerie.
                            </p>
                
                            <p>
                                Au plaisir de vous accueillir
                            </p>
                        
                    
                                <footer class="text-right">
                                    - L'équipe du PALACE HOTEL-
                                </footer>
                        </blockquote>    

                </section>
                <div class="col-sm-4">
                    <h3> Horaires d'overture</h3>
                    <div class="table-responsive"> 
                        <table class="table">
                            <tr>
                                <td>Samedi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Dimanche</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Lundi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Mardi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Mercredi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Jeudi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                            <tr>
                                <td>Vendredi</td>
                                <td>11:00--14:30</td>
                                <td>19:00--23:00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                
        </div>
        <div class="row" style=" background-color: rgb(148, 0, 49);
        padding: 20px;">
            <div class="col-lg-12">
                   <video  class="embed-responsive-item" style="width: 80%;height: auto;" id="video-elt" src="images/vid.mp4" controls width="400" >
                                Il est temps de mettre à jour votre navigateur !
                    </video>
                    <h2>Bienvenus 😋 </h2>
            </div>
        </div>   
        <div class="row" style="margin-top:10px;">
            <div class="container">
                <div class="col-sm-4">
            	<h3><span class="glyphicon glyphicon-th-list"></span> Infos complementaires</h3>
					<ul>
						<li>Disponibilité du wifi.</li>
						<li>Terasse.</li>
						<li>Climatisation.</li>
						<li>Paiement cache ou carte bancaire.</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<h3><span class="glyphicon glyphicon-map-marker"></span> Coordonneés</h3>
                    <iframe width="300" height="auto" frameborder="0" style="border:0"
                     src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAEPFgTJS5NLYsAnkAUxLfzBZCkqeHM75c
                      &q=bejaia,poste" allowfullscreen>
                    </iframe>
				</div>
				<div class="col-sm-4">
                    
                        <h3><span class="glyphicon glyphicon-road"></span> Notre adresse</h3>
                        15 rue de la liberté <br>
                        Béjaia, 066000<br>
				</div>
            </div>    
        </div>
    </div>
    <div id="containGallery" class="container">
            <div id="monCarousel" class="carousel slide center-block" data-ride="carousel"
             style="height: 400; width: 80%;">
                    <ol class="carousel-indicators">
                        <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#monCarousel" data-slide-to="1"></li>
                        <li data-target="#monCarousel" data-slide-to="2"></li>
                        <li data-target="#monCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="images/img1.jpg">
                           
                        </div>
                        <div class="item">
                                <img  class="img-responsive" src="images/img2.jpg">
                                
                        </div>
                        <div class="item">
                                <img class="img-responsive" src="images/img3.jpg">
                                
                        </div>
                     
                    </div>
                    <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
      
                    </a>
    </div>
    <div class="text-center" >
        <h2>Quelques photos de notre etablisement 😍</h2>
    </div>
    </div>
    <div id="contact" class="container">
        <div class="row text-center">
                <h2 class="heading-title">CONTACT</h2>
                <span class="glyphicon glyphicon-earphone"></span><abbr title="Telephone"> Tel:</abbr> (213) 555 555 555 <br />
                    ou <br />
                <span class="glyphicon glyphicon-phone-alt"></span><abbr title="Telephone fixe"> Tel:</abbr> (213) 34 555 555

                <p><a id="env" href="mailto:ibra.alg021095@gmail.com"><span class="glyphicon glyphicon-envelope"></span> Envoyer un e-mail !</a></p>
        </div>
    </div>
   
    <footer id="footer-page" class="footer text-center">
            <p id="textFooter">
            Tout Droit reservé. Palace Hotel 2019.
            </p>
    </footer>
    <!--js-->
    <script src="Assets/jquery/jquery.min.js"></script>
    <script src="Assets/js/bootstrap.js"></script>
</body>
</html>