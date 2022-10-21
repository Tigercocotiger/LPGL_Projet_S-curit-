<?php

// Read the JSON file 
$json = file_get_contents('utilisateur.json');
  
// Decode the JSON file
$json_data = json_decode($json,true);


// Cas où l'utilisateur à faire une modification 
if(isset($_GET['nom'])){
    $json_data['adresse'] = $_GET['adress'];
    $json_data['nom'] = $_GET['nom'];
    $json_data['prénom'] = $_GET['prenom'];
    $JsonString = json_encode($json_data);
    file_put_contents('utilisateur.json', $JsonString);
    header("Location: infoo.php");
}
else{

// $variable = partie du fichier json
$adresse = $json_data['adresse'];
$nom = $json_data['nom'];
$prenom = $json_data['prénom'];
// Formulaire modification
echo '<div id= "body" align="center">';
echo '<p>Identifiant   :  '.$json_data['identifiant'].'</p>';
echo '<p>Mot de passe   :  '.$json_data['mdp'].'</p>';
echo '<p>nom   : </p>';
echo '<form action="modifierr.php" method="get">';
echo "<input type='nom' placeholder='nom' name= 'nom' value='".$nom."' />";
echo '<p>prenom   : </p>';
echo "<input type='prenom' placeholder='prenom' name= 'prenom' value='".$prenom."' />";
echo '<p>adresse   : </p>';
echo "<input type='adress' placeholder='Adress' name= 'adress' value='".$adresse."' />".'<br>';
echo '<button type="submit" name="Modif" value="1">Modifier</button>';
echo '<br><a href="../unfixed"> -> Retour <- </a>';
echo '</div>';
echo '</form>';
}
