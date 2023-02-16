<!DOCTYPE HTML> 
<html lang="fr">
    <head>
        <!-- titre de la page -->
        <title>Société Dutoit</title>
        <!-- type d'encodage de la page -->
        <meta charset="utf-8" />
        <!-- taille et échelle de la page -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    
    <!-- corps du document -->
    <body>
    
    <?php
        require('../include_front_end/entetePage.html');
    ?>
    
    <div id=contenu>
        <h2>Contacts</h2>
    
        <h4>Voici les différentes adresses pour nous contacter :</h4>
    
        <p>Par mail auprès de notre conseiller : 
        <!-- élément  blockquote mis en forme par bootstrap  -->
        <blockquote>
            <blockquote>
                <p><a href="formulaire.php">durand@wanadoo.fr</a></p>
            </blockquote>
        </blockquote>
        <br><br>

        <p>ou par courrier :</p>
        <!-- mise en oeuvre d'un tableau à 2 colonnes (td)  et une seule ligne (tr) -->
        <div class="boiteContact" >
            <table class="table" >
            <tr>
                <!-- contenu de la 1ère colonne du tableau -->
                <td>
                    <p><img src="../assets/images/batiment.jpg" class="img-circle" alt="Logo Dutoit" ></p>
                </td>
                
                <!-- contenu de la 2ème colonne du tableau -->
                <td>
                    <blockquote><blockquote>
                        <address>
                        <strong>Société Dutoit</strong><br />
                        Monsieur durand<br />
                        30 avenue du Père Goriot<br />
                        69008 Lyon
                        </address>
                    </blockquote></blockquote>
                </td>
            </tr>
            </table>
        </div>
    </div>
    
    <p id=footer>- Société Dutoit -</p>
        
    <!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
    </body>
</html>
