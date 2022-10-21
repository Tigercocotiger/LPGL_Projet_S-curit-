<?php
// variables de connexion à la bdd
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet_secu";

// Nouvelle connexion
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Erreur connection: " . $conn->connect_error);
}

// requette sql
$req1 = "SELECT * FROM utilisateur";
$result1 = $conn->query($req1);

// test si au moins au ligne de réposne 
if ($result1->num_rows > 0) {
    // output data of each row
    echo '<div id= "body" align="center">';
    echo "<table>";
    echo "<tr><td>identifiant disponibles : </td></tr>"; 

    // affichage des lignes
    while($row = $result1->fetch_assoc()) {
      echo "<tr><td>".$row["identifiant"]."</td></tr>". "<br>";
    }
    echo "</table>";

    // on test si le résultat de post existe
    if (isset($_POST['id']) && isset($_POST['mdp'])) {
        $id = $_POST['id'];
        $mdp = $_POST['mdp'];
        $req2 = "SELECT * FROM utilisateur WHERE identifiant = '$id' AND mdp = '$mdp'";
        $result2 = $conn->query($req2);
        while($roww = $result2->fetch_assoc()) {
            echo '<p>Informations utilisateur   :'.'<br>- identifiant :'.$roww["identifiant"].'<br>- mot de passe :'.$roww["mdp"].'<br>- nom :'.$roww["nom"].'<br>- prénom :'.$roww["prenom"].'<br>- adresse :'.$roww["adresse"].'</p>';
          }

    }
    echo "<br>";
    echo '<form action="unfixed.php" method="post">';
    echo '<p>Identifiant   : </p>';
    echo "<input type='id' placeholder='id' name= 'id'/>";
    echo '<p>Mot de passe   : </p>';
    echo "<input type='mdp' placeholder='mdp' name= 'mdp'/>";
    echo "</br>";
    echo '<button type="submit" name="Modif" value="1">Rechercher</button> ';
    echo '<br><a href="../SQL"> -> Retour <- </a>';
    echo '<p>Message d\'une personne malveillante   :' .htmlspecialchars("'OR 1=1 OR 1='"). '</p>';
    echo '</div>';
  } else {
    echo "aucun résultat";
  }

 

  
?>