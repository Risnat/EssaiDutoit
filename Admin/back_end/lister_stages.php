<?php
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
    header('Location:../../index.php');
}
// affichage lors du clic sur Stage dans la page accueil.php
require('../../back_end/include/_inc_parametres.php'); 
require('../../back_end/include/_inc_connexion.php');
require('../../back_end/include/dateFrancais.php');
            
//    on récupère toutes les lignes de la vue
$resultat = $cnx->prepare("select * FROM stage INNER JOIN logiciel ON stage.nologiciel=logiciel.nologiciel INNER JOIN niveau ON niveau.codeniveau=stage.codeniveau;");
//le résultat est récupéré sous forme d'objet
$resultat->execute();
$stages = $resultat->fetchAll();
?>