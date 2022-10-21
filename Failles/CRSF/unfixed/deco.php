<?php
// Création de la session
session_start();

// Afin de récupérer et la détruire
session_destroy();

// On change la page 
header("Location: modifier_nom.php");
?>