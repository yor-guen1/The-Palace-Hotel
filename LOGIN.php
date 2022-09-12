<?php
session_start();
       //CREATION DU SESSION
      
      //connection a la BDD
      include("ConnecteBDD.php");
      //recupereation des element de tableau en BDD
      $reponse=$bdd->query("SELECT *FROM utilisateurs");
      //fetch expliquer a SELECT en dossier SQL
      while ($donnes=$reponse->fetch()) {
        //pour verifier que tes connecté
        if (isset($_POST["pseudo"]) && $donnes["pseudo"]==$_POST["pseudo"] && isset($_POST["mdp"]) && $_POST["mdp"]==$donnes["mdp"] ) {
        
          //tes connecté
          //trouve cest yn boolean pour  quon trouve la personne mais on veut que le test continue sur tt le tab
        $trouve=true;
        $_SESSION["auth"]=true;
        $_SESSION["user_name"]=$_POST["pseudo"];
        //si connecte on go a acceuil
         header("location:index.php");

       //mot de passe ou pseudo faux 
      }}

       if(!$trouve){
        
        $_SESSION["auth"]=false;
        $_SESSION["erreur"]=true;
        // si non connecté on reviens a connexion
         header("location:connexion.php#connexion");
      } 
      //POUR ALLER A LA PAGE SECRETE 'bien exmpliquer dans autre page jsp laquelle'
      ?>