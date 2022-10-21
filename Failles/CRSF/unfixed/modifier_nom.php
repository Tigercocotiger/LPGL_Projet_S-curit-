<?php
// Read the JSON file 
$json = file_get_contents('../utilisateur.json');
// Decode the JSON file
$json_data = json_decode($json,true);

session_start();
if(!isset ($_SESSION['ID'])){
    header("Location: connexion.php");
}
else if(isset($_GET['name'])){
    $id = session_id();
    if($id=$json_data['id']){
        $json_data['nom'] = $_GET['name'];
        // on encode un string pour le passer en json
        $JsonString = json_encode($json_data);
        // On modifie le fichier json
        file_put_contents('../utilisateur.json', $JsonString);
        echo "GET SCAMMED KID AHHAHAHHAHHAH 😈";
        echo '<br><a href="../../CRSF"> -> Retour <- </a>';
    }
   
}
else{
    $json_data['id'] = $_SESSION['ID'];

    // on encode un string pour le passer en json
    $JsonString = json_encode($json_data);

    // On modifie le fichier json
    file_put_contents('../utilisateur.json', $JsonString);

    // On lui permetde se déconecter 
    echo '<a href="deco.php"> -> Déconnexion <- </a>';
    echo '<br><a href="../../CRSF"> -> Retour <- </a>';


    echo session_id();
}



?>