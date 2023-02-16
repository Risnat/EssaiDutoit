<?php
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
    header('Location:../../index.php');
}
require('../../back_end/include/_inc_parametres.php'); 
require('../../back_end/include/_inc_connexion.php');

 // préparation de la requête : recherche d'un stage particulier
$req_pre = $cnx->prepare("SELECT * FROM Stage WHERE NoStage = :id");

// liaison de la variable à la requête préparée
$req_pre->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$req_pre->execute();
//le résultat est récupéré sous forme d'objet
$stage=$req_pre->fetch();

?>