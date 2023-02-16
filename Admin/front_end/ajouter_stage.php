<?php 
//empêche l'exécution de la page si l'admin n'est pas connecté
session_start();
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
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
<div id=conteneur class="boite">
    <ul id=menu>
          <?php require('../include/entetePage.html');    ?>
    </ul>

    <div id=contenu>
<h2>stage</h2>
<p>Sur cette page, vous pouvez ajouter un stage.
<form method="post" action="../back_end/ajouter_stage.php"  >
    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" />
        <table class="table table-striped">
            <tr>
                <td>Sujet :</td>
                <td><input type='text' name='sujet' size="30" required></td>
            </tr>
            <tr>
                <td>Date début :</td>
                <td><input type='date' name='datDeb' required ></td>
            </tr>
            <tr>
                <td>Date fin :</td>
                <td><input type='date' name='datFin' required></td></br>
            </tr>
            <tr>
                <td>Niveau :</td>
                <td>
                  <?php require('../back_end/parcourir_niveaux.php');
                    
                    $Chaine = "";
                    $Select='<select size="1" name="niveau">';
                    // tant qu'il y a des niveaux
                    foreach ($niveaux as $niveau) {
                        $Chaine = $Chaine."<option value=".$niveau['CodeNiveau'].">".$niveau['LibelleNiveau']."</option>";
                    }
                    echo $Select.$Chaine.'</select></br>';
                    ?>
                </td>
            </tr>

            <tr>
                <td>Logiciel :</td>
                <td>
                 <?php require('../back_end/parcourir_logiciels.php');
                    $Chaine = "";
                    $Select='<select size="1" name="logiciel">';
                    // pour tous les logiciels
                    foreach ($logiciels as $logiciel ) {
                        $Chaine = $Chaine."<option value=".$logiciel['NoLogiciel'].">".$logiciel['NomLogiciel']."</option>";
                    }
                    echo $Select.$Chaine.'</select>';
                    ?>  
                </td>
            </tr>

            <tr>
                <td>Formateur :</td>
                <td>
                <?php require('../back_end/parcourir_formateurs.php');
                                
                 $Chaine = "";
                 $Select='<select size="1" name="formateur">';
                // pour tous les formateurs
                foreach ($formateurs as $formateur ) {
                    $Chaine = $Chaine."<option value=".$formateur['NoFormateur'].">".$formateur['NomFormateur']."</option>";
                }  
                echo $Select.$Chaine.'</select>';
                ?>  
                </td>
            </tr>            
            <tr>
                <td width="50%" align="right"></td>
                <td width="50%"></td>
            </tr>
            

            <tr>
                <td><input type='submit' value='Ajouter' /></td>
            </tr>
        </table>
   <!-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
</body>
</html>
