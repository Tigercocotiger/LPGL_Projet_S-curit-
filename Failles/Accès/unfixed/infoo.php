<?php
// Read the JSON file 
$json = file_get_contents('utilisateur.json');
  
// Decode the JSON file
$json_data = json_decode($json,true);

// Afficher les infos du fichier JSON
echo '<div id= "body" align="center">';
echo '<p>Identifiant   :  **** </p>';
echo '<p>Mot de passe   :  **** </p>';
echo '<p>Nom   :  '.$json_data['nom'].'</p>';
echo '<p>Prénom   :  '.$json_data['prénom'].'</p>';
echo '<p>Adresse   :  '.$json_data['adresse'].'</p>';
echo '<br><a href="modifierr.php"> -> Modifier <- </a>';
echo '<br><a href="../../Accès"> -> Retour <- </a>';
echo '</div>';
  
?>
