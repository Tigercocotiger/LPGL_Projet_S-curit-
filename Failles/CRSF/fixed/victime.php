<?php
session_start();
$_SESSION["token"] = bin2hex(random_bytes(32));
$_SESSION["token-expire"] = time() + 60;

echo '<div id= "body" align="center">';
echo '<form action="modifier_nom.php" method="post">';
echo '<input type="hidden" name="token" value="'.$_SESSION["token"].'"/>';
echo '<p>Nom   : </p>';
echo "<input type='name' placeholder='name' name= 'name'/>";
echo "</br>";
echo '<button type="submit" name="Modif" value="1">Changer</button>';
echo "</form></div>";
?>