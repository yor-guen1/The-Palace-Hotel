
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
                    <li><a href="vosAvis.php">VOS AVIS</a></li>
                    <li><a href="reservations.php">RESERVATIONS</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            
            <!--login-->
            
                
                 
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
        <h2 class="heading-title  text-center" id="connexion">reservationAdmin</h2>
        <div id="avis" class="avis">
               <table class="table table-stripped">
                   <thead>
                       <th>Nom</th>
                       <th>Prenom</th>
                       <th>Email</th>
                       <th>tel</th>
                       <th>NbrPersonnes</th>
                       <th>Date</th>
                       <th>Type</th>
                   </thead>
                   <tbody>
                       <?php
                       include("ConnecteBDD.php"); 
                       $reponse=$bdd->query("SELECT * FROM reservation");
                       //une boucle pour ramener chaque tuple a sa place on tableau
                       while ($donnee=$reponse->fetch()) {
                           echo '<tr>
                           <td> '.$donnee["nom"].'</td>
                           <td> '.$donnee["prenom"].'</td>
                           <td> '.$donnee["email"].'</td>
                           <td> '.$donnee["tel"].'</td>
                           <td> '.$donnee["nbrpersonne"].'</td>
                            <td> '.$donnee["datereserve"].'</td>
                           <td> '.$donnee["typechambre"].'</td>
                           </tr>';
                       }
                        ?>
                   </tbody>
               </table>     
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