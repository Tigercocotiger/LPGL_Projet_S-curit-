<?php 
// on créer la session
session_start();

// pour la détruire
session_destroy();

// changement de la page
header('Location: attaquant.php');
exit();
?>