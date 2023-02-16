<!DOCTYPE HTML> 
<!-- le naviagateur utilisera les règles d'écriture de la DTD selon le standard W3C -->

<html lang="fr">
<head>
    <title>Envoi mail</title>
    <!-- encodage du document en iso-8859-1 ou UTF-8 Voir format dans la barre d'outils-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         <!-- liens avec les fichiers css de bootstrap -->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">   
        <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <?php
    $mail = "Message";
    require "../back_end/include/Outils.class.php";
    switch ($_POST['civilite']) {
    case 1 : $mail = $mail ." de madame"; 
        break;
    case 2 : $mail = $mail ." de monsieur"; 
        break;
    }
    $mail = $mail ." ".$_POST["nom"] . ". ". $_POST["message"];
    $mail = $mail .". Vous pouvez me contacter par téléphone au  ".$_POST["tel"] . " ou par mail à ". $_POST["mail"];
    
    // modifier l'adresse ci-dessous avec la votre !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    $email = "nathalif.irisser@gmail.com";
    $objet = $_POST["objet"] ;
    // envoi du mail : destinataire, objet, message, émetteur
    Outils::envoyerMail($email, $objet, $mail, $_POST["mail"]);
    // retour à la page contact
    header("Location: contact.php");
    ?>
    !-- Obligatoirement avant la balise de fermeture de l'élément body  -->
    <!-- Intégration de la libraire jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Intégration de la libraire de composants du Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
