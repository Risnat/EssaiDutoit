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
<?php
	require('../include_front_end/entePage.html');
?>
	<div id=contenu>
	<h2>Publipostage</h2>
	<td width="50%"><h4>
		Réaliser un publipostage avec Word.<br><br>
  
		Vous devez envoyer la même lettre à plusieurs destinataires différents ?
		Pas besoin de taper chacune des lettres alors que seules quelques informations différent. <br><br>

		En effet, en réalisant un publipostage, vous pouvez créer automatiquement une série de lettres
		et d'enveloppes où seules les cordonnées et les informations des destinataires changent.
		Bref, c'est un énorme gain de temps. <br><br>

		Pour réaliser un publipostage, vous devrez donc dans un premier temps établir une base de données de la liste des destinataires
		et des informations s'y référant et dont vous avez besoin pour votre publipostage (nom, prénom, adresse, sexe, ...).
		Cette base de données peut être réalisée dans un tableau Excel. <br><br>

		La seconde étape consistera à créer le modéle de lettre et d'enveloppe que vous souhaitez utiliser. <br><br>

		Enfin, il ne vous restera alors plus qu'à mélanger tout cela pour créer automatiquement et imprimer vos lettres et enveloppes personnalisées. 
	</h4></td>
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
