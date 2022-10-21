    <?php
// Read the JSON file 
$json = file_get_contents('../utilisateur.json');
  
// Decode the JSON file
$json_data = json_decode($json,true);

    // On test l'éxistance du post
    if (isset($_POST['id'])) {
        // on regarde si ça correspond au fichier JSON
        if (($json_data['identifiant'] = $_POST['id']) && ($json_data['mdp'] = $_POST['mdp'])) {

            // Création d'une session
            session_start();
            session_regenerate_id();
            // On rentre les infos du $Post dans la sessions de l'utilisateur
            $_SESSION['ID'] = session_id();
            $_SESSION['identifiant'] = $_POST['id'];
            $_SESSION['mdp'] = $_POST['mdp'];

            // On lui permet d'acceder à la page modiferr.php
            header("Location: victime.php");
        } else {

            // Création du formulaire
            echo '<div id= "body" align="center">';
            echo '<a href="modifier_nom.php"> -> Retour <- </a>';
            echo '<form action="connexion.php" method="post">';
            echo '<p color = "red" >Combinaison incorrecte</p>';
            echo '<p>Identifiant   : </p>';
            echo "<input type='id' placeholder='id' name= 'id'/>";
            echo '<p>Mot de passe   : </p>';
            echo "<input type='mdp' placeholder='mdp' name= 'mdp'/>";
            echo "</br>";
            echo '<button type="submit" name="Modif" value="1">Connection</button> ';
            echo '</div>';
        }
    } else {
        // Création du formulaire
        echo '<div id= "body" align="center">';
        echo '<a href="modifier_nom.php"> -> Retour <- </a>';
        echo '<form action="connexion.php" method="post">';
        echo '<p>Identifiant   : </p>';
        echo "<input type='id' placeholder='id' name= 'id'/>";
        echo '<p>Mot de passe   : </p>';
        echo "<input type='mdp' placeholder='mdp' name= 'mdp'/>";
        echo "</br>";
        echo '<button type="submit" name="Modif" value="1">Connection</button>';
        echo '</div>';
    }
    ?>
