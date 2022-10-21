    <?php
    // Création d'une session
    session_start();
    // Read the JSON file 
    $json = file_get_contents('utilisateur.json');

    // Decode the JSON file
    $json_data = json_decode($json, true);

    // Si la session existe pas on modifie le header vers la page de connexion
    if (!isset($_SESSION['identifiant'])) {
        header("Location: connexion.php");
    } else {

        // Cas où l'utilisateur à faire une modification 
        if (isset($_GET['nom'])) {
            $json_data['adresse'] = $_GET['adress'];
            $json_data['nom'] = $_GET['nom'];
            $json_data['prénom'] = $_GET['prenom'];

            // on encode un string pour le passer en json
            $JsonString = json_encode($json_data);

            // On modifie le fichier json
            file_put_contents('utilisateur.json', $JsonString);

            // on change la page 
            header("Location: infoo.php");
        } else {

            // $variable = partie du fichier json
            $adresse = $json_data['adresse'];
            $nom = $json_data['nom'];
            $prenom = $json_data['prénom'];

            // Formulaire modification
            echo '<div id= "body" align="center">';
            echo '<a href="infoo.php"> -> Retour <- </a>';
            echo '<p>Identifiant   :  ' . $json_data['identifiant'] . '</p>';
            echo '<p>Mot de passe   :  ' . $json_data['mdp'] . '</p>';
            echo '<p>nom   : </p>';
            echo '<form action="modifierr.php" method="get">';
            echo "<input type='nom' placeholder='nom' name= 'nom' value='" . $nom . "' />";

            echo '<p>prenom   : </p>';
            echo "<input type='prenom' placeholder='prenom' name= 'prenom' value='" . $prenom . "' />";

            echo '<p>adresse   : </p>';
            echo "<input type='adress' placeholder='Adress' name= 'adress' value='" . $adresse . "' />" . '<br>';

            echo '<button type="submit" name="Modif" value="1">Modifier</button> <br>';
            echo '<a href="deco.php"> -> Déconnexion <- </a>';
            echo '<br><a href="../../Accès"> -> Retour <- </a>';
            echo '</div>';
            echo '</form>';
        }
    }
    ?>
