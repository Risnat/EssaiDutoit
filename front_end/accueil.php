
<!DOCTYPE HTML> 
<!-- le navigateur utilisera les règles d'écriture de la DTD selon le standard W3C -->
<html lang="fr">
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
        <link rel="stylesheet" href="../assets/css/style.css">

        
    </head>
    
    <!-- corps du document -->
    <body>
    
    <?php

        require('../include_front_end/entetePage.html');
      
    ?>
    
    <!-- Bannière Bienvenue -->
    <!-- le texte sera centré -->
<div class="text-center page-header">
        <h1>Bienvenue sur notre site ! </h1> 
        
    </div>
    
    
    <div id=contenu>
        <h2>Editorial</h2>
        <!-- l'image peut avoir plusieurs formes : rounded (coins arrondi), ovale (circle), cadre(thumbnail) -->
        <img src="../assets/images/logo.jpg" class="img-circle" alt="Logo Dutoit" />
        
        <!-- la balise <br> unique permet le passage à la ligne du texte -->
        <p>Nous sommes heureux de vous accueillir sur le site de la société de formation continue Dutoit. </p>
        <p>Nos stages s'adressent aussi bien à des débutants qu'à des personnes souhaitant se perfectionner sur des logiciels de bureautique
        MicroSoft principalement.</p>
        
        <h2>Information</h2>
        <p>La liste de nos stages est mise à jour régulièment, n'hésitez pas à la consulter et à nous contacter.</p>
    </div>
    
    
    <!-- pied de page avec lien feuille de style-->
    <p id="footer">- Société Dutoit - <a href ="../admin/"> Administration</p>

<!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
    </html>
