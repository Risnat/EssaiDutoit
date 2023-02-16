<?php
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
    header('Location:../../index.php');
}
require('../../back_end/include/_inc_parametres.php'); 
require('../../back_end/include/_inc_connexion.php');
//    on récupère toutes les lignes de la table Logiciel
$resultat = $cnx->prepare("select * FROM formateur ;");
$resultat->execute();
//le résultat est récupéré sous forme d'objet
$formateurs= $resultat->fetchAll();
?>