<?php
// Si le lien contient ?id="..."
if(isset($_GET['id'])){
    // on affecte la variable à l'id de session
    session_id($_GET['id']);

    // Création de la session
    session_start();


    echo '<div id= "body" align="center">';
    echo "<br>";
    echo '<form action="victime.php" method="get">';
    echo '<p>Information SUPER MEGA GIGA SECRETE   : </p>';
    echo "<input type='info' placeholder='info' name= 'info'/>";
    echo '<button type="submit">Enregister</button> ';
    echo '<br><a href="../"> -> Retour <- </a>';
    echo '</div>';
}
else if (isset($_GET['info'])){
    // Création de la session
    session_start();
    $_SESSION['information'] = $_GET['info'];
    echo '<div id= "body" align="center">';
    echo "<br>";
    echo '<p>"Votre"(😈) Information SUPER MEGA GIGA SECRETE   : </p>';
    echo $_SESSION['information'];
    echo '<br><a href="../"> -> Retour <- </a>';
    echo '</div>';
}
?>