<?php
// On affecte un id de session
// On simule le cas où l'attaquant connais son id de session
session_id("123456");

// on crée la session
session_start();

// var du lien
$link_address = 'victime.php?id=123456';

echo '<div id= "body" align="center">';
echo "<br>";
echo "<br> information de la session : ";
echo print_r($_SESSION);
echo '<br><a href="../"> -> Retour <- </a>';
echo '<form action="delete.php" method="POST">
<input type="submit" value="Clear session" />
</form>';

// Lien simulation de l'ouverture de la victime
echo "<a href='".$link_address."' target="."_blank".">Simulation d'ouverture du lien par la victime</a></div>";
?>