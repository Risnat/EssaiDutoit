<!DOCTYPE HTML> 
<!-- le naviagateur utilisera les règles d'écriture de la DTD selon le standard W3C -->

<html lang="fr">
<head>
    <title>formulaire de saisie</title>
    <!-- encodage du document en iso-8859-1 ou UTF-8 Voir format dans la barre d'outils-->
    <meta charset="UTF-8">
    <!-- taille et échelle de la page -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- liens avec les fichiers css de bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
        <link rel="stylesheet" href="../assets/css/style.css">

    <!-- lien vers javascript -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>  
</head>
<body>
    <!-- barre de navigation -->
    <?php
        require "../include_front_end/entetePage.html";
    ?>
    
    <div id=contenu>
        <!-- form qui permet d'appeller le script envoiMail.php sur clic du bouton Valider -->
        <!-- grâce à la méthode POST -->
        <form action = "envoiMail.php" method = "post">
        <h2>Envoi d'un message</h2> <br>
        
        <table>
            <tr>    
                <td> Civilité :</td>
                <td><select name="civilite" size="1" class="form-control">
                    <option value="1" selected="selected"> Madame <br /> 
                    <option value="2"> Monsieur <br /> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nom et prénom :  </td>
                <!-- txtNom nom de la variable récupérée dans le script php -->
                <td><input type = "text" name ="nom" placeholder="Votre nom et prénom" required class="form-control"></td>
            </tr>
            <tr>
                <td>Adresse mail : </td>
                <td><input type = "email" name ="mail"  required class="form-control"></td>
            </tr>
            <tr>
                <td>Téléphone : </td>
                <td><input type = "tel" name ="tel" class="form-control" pattern="[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}.[0-9]{2}" placeholder="01 02 03 04 05"></td>
            </tr>
            <tr>    
                <td> Objet :</td>
                <td><select name="objet" class="form-control">
                    <option value="Demande de rdv" selected="selected"> Demande de rdv <br/> 
                    <option value="Demande d'information"> Demande d'information <br/> 
                    </select>
                </td>
            </tr>
            <tr>
                <td>Message : </td>
                <td><textarea name ="message" placeholder="Votre message" class="form-control"></textarea></td>
            </tr>
            
            <tr>
                <td>Etes-vous client ? </td>
                <td>Oui <input type="radio" checked="checked"  Onclick="$('#adresseClient').hide('slow')" value="oui" id="oui" name="cli"/> 
                    Non <input Onclick="$('#adresseClient').slideDown('slow');" id="non" type="radio" value="non" name="cli"/></td>
            </tr>
        </table>
    
        <div id="adresseClient" style="display: none">
        <table>
            <tr>
                <td>Numéro et rue :</td>
                <td><input type="text" name="rue"/></td>
            </tr>
            <tr>
                <td>Code Postal :</td>
                <td><input type="text" name="cp"/></td>
            </tr>
            <tr>
                <td>Ville :</td>
                <td><input type="text" name="ville"/></td>
            </tr>
        </table>
        </div>
        <tr>
            <td><input type="submit" value ="Valider" class="btn btn-success"> </td>
            <td><input type="reset" value ="Annuler" class="btn btn-default"></td>
        </tr>
        
        </form>
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
