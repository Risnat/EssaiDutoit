<?php
require('../back_end/include/_inc_parametres.php'); 
require('../back_end/include/_inc_connexion.php');
        
// préparation de la requête : recherche de l'utilisateur
$req_pre = $cnx->prepare("SELECT Mdp FROM utilisateur WHERE Ident = :id");
// liaison de la variable à la requête préparée
$req_pre->bindValue(':id', $_POST['ident'], PDO::PARAM_STR);
$req_pre->execute();

//le résultat est récupéré sous forme d'objet
$ligne=$req_pre->fetch(PDO::FETCH_OBJ);
// récupération du mot de passe
if ($ligne) {$mdp = $ligne->Mdp;
    if (isset($mdp) && $mdp === $_POST['password'] ) {
        $_SESSION['connect'] = $mdp == $_POST['password'];
        // $_SESSION['connect'] = $mdp == sha1($_POST['password']);
        $_SESSION['id'] = $_POST['ident'];
      
       header('Location:front_end/accueil.php');
    }else 
    {
        echo "Erreur sur identifiant ou mot de passe";
        echo "<br />";
        echo "<a href='index.php'>Retour</a>";
    }
}
    else 
    {
        echo "Erreur sur identifiant ou mot de passe";
        echo "<br />";
        echo "<a href='index.php'>Retour</a>";
    }
    // fermeture du curseur associé à un jeu de résultats
    $req_pre->closeCursor();
 
?>
