<?php
session_start();
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
    print_r($_SESSION);
        header('Location:../../index.php');
}

?>
<html>
<head>
    <!-- titre de la page -->
        <title>Société Dutoit</title>
        <!-- type d'encodage de la page -->
        <meta charset="utf-8" />
        <!-- taille et échelle de la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <!-- liens avec les fichiers css de bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
        <link rel="stylesheet" href="../../assets/css/style.css">
 </head>
<body>
<div id=container-fluid>
    
        <?php require '../include/entetePage.html'; ?>
    

    <div id=contenu>
    <?php
    if ($_SESSION['connect'] == true) { ?>
        <h2>Accueil</h2>
        <h4>Bienvenue dans l'espace administrateur. </h4></br></br>
        Cliquez sur les onglets pour gérer les stages, les logiciels, les niveaux ou les utilisateurs. </br></br>
        Par sécurité, n'oubliez pas de cliquer sur le lien "Déconnexion" une fois vos tâches accomplies.
        <?php
    } else { ?>
        <h2>Erreur</h2>
        <p>Mot de passe incorrect (attention au majuscule/minuscule).</p>
        
        <?php
        include 'connexion.php';
    } ?>
    </div>
    
    <p id=footer>Société Dutoit</p>
</div>

   <!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
</body>
</html>
