<?php
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
    header('Location:../../index.php');
}
require('../../back_end/include/_inc_parametres.php'); 
require('../../back_end/include/_inc_connexion.php');
$req_pre = $cnx->prepare(
            "UPDATE Stage SET Sujet=:Nom, DateDebut=:Deb, DateFin=:Fin,
		CodeNiveau=:Niv, NoLogiciel=:Log WHERE NoStage= :id "
        );
        // liaison de la variable à la requête préparée
$req_pre->bindValue(':Nom', $_POST['sujet'], PDO::PARAM_STR);
$req_pre->bindValue(':Deb', $_POST['datDeb'], PDO::PARAM_STR);
$req_pre->bindValue(':Fin', $_POST['datFin'], PDO::PARAM_STR);
$req_pre->bindValue(':Niv', strtoupper($_POST['niveau']), PDO::PARAM_STR);
$req_pre->bindValue(':Log', $_POST['logiciel'], PDO::PARAM_INT);
$req_pre->bindValue(':id', $_POST['numero'], PDO::PARAM_INT);
$req_pre->execute();
header('Location:../front_end/stage.php')
?>