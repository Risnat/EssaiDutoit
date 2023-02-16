<?php
session_start();
//empêche l'exécution de la page si l'admin n'est pas connecté
if (!isset($_SESSION['connect']) || !isset($_SESSION['id'])) {
    header('Location:../../index.php');
}
require('../back_end/supprimer_un_stage.php');
header('Location:stage.php');
?>
