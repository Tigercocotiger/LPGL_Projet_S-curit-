<?php
// Read the JSON file 
$json = file_get_contents('utilisateur.json');
  
// Decode the JSON file
$json_data = json_decode($json,true);

// Création de la session
session_start();

// Afficher les infos du fichier JSON
echo '<div id= "body" align="center">';
echo '<p>Identifiant   :  **** </p>';
echo '<p>Mot de passe   :  **** </p>';
echo '<p>Nom   :  '.$json_data['nom'].'</p>';
echo '<p>Prénom   :  '.$json_data['prénom'].'</p>';
echo '<p>Adresse   :  '.$json_data['adresse'].'</p>';

// On test si la session['identifiant'] existe
if (isset($_SESSION['identifiant'])){

    // On lui permetde se déconecter 
    echo '<a href="deco.php"> -> Déconnexion <- </a>';
}
// reste du formulaire
echo '<br><a href="modifierr.php"> -> Modifier <- </a>';
echo '<br><a href="../../Accès"> -> Retour <- </a>';
echo '</div>';

?>