<!DOCTYPE HTML> 
<html lang="fr">
    <head>
        <!-- titre de la page -->
        <title>Société Dutoit</title>
        <!-- type d'encodage de la page -->
        <meta charset="utf-8" />
        <!-- taille et échelle de la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- liens avec les fichiers css de bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
        <link rel="stylesheet" href="../assets/css/style.css">
   </head>
    
    <!-- corps du document -->
    <body>
    
    <!-- barre de navigation -->
    <?php
    require('../include_front_end/entetePage.html');
    ?>
            
    <div id=contenu class="boite">
        <h2>Liste des formateurs à votre disposition</h2>
        
        <!-- mise en place d'un tableau de 5 colonnes (td) et de 6 lignes dont la 1ère d'entête -->
        <!-- la présentation du tableau peut avoir : des lignes grises et blanches alternées (table-striped), des cadres ( table-bordered) -->
        <!-- survol des lignes (table-hover), ) -->
        <table class="table table-striped">

            <?php
                // exécution de la requête  et récupération des données extraites 
                require_once "../back_end/recherche_formateurs.php";
        
                // tant qu'il y a des lignes à lire
            foreach($formateurs as $formateur) { ?>
                    <p><tr>
                
                    <td><b><?php echo $formateur['NomFormateur']; ?></b></td>
                    <td><b><?php echo $formateur['PrenomFormateur']; ?></b></td>
                    <!-- Après modification de votre table, vous pouvez accéder à l'image correspondante " -->
                <?php                    
            }
            ?>
        </table>
        
    </div>
        
    <p  id=footer>- Société Dutoit - </p>
    
    
<!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
