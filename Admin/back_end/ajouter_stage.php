<?php
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
        header('Location:../../index.php');
}
require('../../back_end/include/_inc_parametres.php'); 
require('../../back_end/include/_inc_connexion.php');
// recherche du dernier numéro de stage
$resultat = $cnx->query("select MAX(NoStage) + 1 num FROM Stage ");
$resultat->setFetchMode();
$ligne = $resultat->fetch();
$id = $ligne['num'];
// préparation de la requête : recherche d'un stage particulier
$req_pre = $cnx->prepare(
    "INSERT INTO Stage (NoStage,Sujet, Datedebut, DateFin, CodeNiveau, NoLogiciel, NoFormateur) 
		VALUES (:id,:Nom, :Deb, :Fin,:Niv,:Logi, :Form );"
);
        // liaison de la variable à la requête préparée
$req_pre->bindValue(':id', $id, PDO::PARAM_INT);
$req_pre->bindValue(':Nom', $_POST['sujet'], PDO::PARAM_STR);
$req_pre->bindValue(':Deb', $_POST['datDeb'], PDO::PARAM_STR);
$req_pre->bindValue(':Fin', $_POST['datFin'], PDO::PARAM_STR);
$req_pre->bindValue(':Niv', strtoupper($_POST['niveau']), PDO::PARAM_STR);
$req_pre->bindValue(':Logi', $_POST['logiciel'], PDO::PARAM_INT);
$req_pre->bindValue(':Form', $_POST['formateur'], PDO::PARAM_INT);
$req_pre->execute();
header('Location:../front_end/stage.php');
?>
