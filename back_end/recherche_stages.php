<?php
require_once "../back_end/include/_inc_parametres.php";
require_once "../back_end/include/_inc_connexion.php";
require_once "../back_end/include/dateFrancais.php";
// exécution de la requête  et récupération des données extraites
$resultat = $cnx->prepare("select * FROM stage INNER JOIN logiciel ON logiciel.NoLogiciel=stage.nologiciel INNER JOIN Niveau ON niveau.CodeNiveau=stage.codeNiveau ;");
$resultat->execute();
// lecture de la première ligne du jeu d'enregistrements
$stages = $resultat->fetchAll();
?>
