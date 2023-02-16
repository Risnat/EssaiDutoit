<?php 
require_once "../back_end/include/_inc_parametres.php";
require_once "../back_end/include/_inc_connexion.php";
$resultat = $cnx->prepare("select * FROM formateur ORDER BY 2,3 ;");
$resultat->execute();

// lecture de la première ligne du jeu d'enregistrements
$formateurs = $resultat->fetchAll();
?>
