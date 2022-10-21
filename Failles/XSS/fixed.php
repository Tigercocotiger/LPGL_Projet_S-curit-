<?php
echo '<div id= "body" align="center">';
echo '<a href="../XSS"> -> Retour <- </a>';
echo '<form action="fixed.php" method="get">';
echo '<p>Message à afficher   : </p>';
echo "<input type='msg' placeholder='Message à afficher' name= 'msg'/>";
echo "</br>";
echo '<p>Message d\'une personne malveillante   :' .htmlspecialchars('<script language="javascript"> alert("bonjour"); </script>'). '</p>';


if (isset($_GET['msg'])){
    echo '<p>Votre message   : '.htmlspecialchars($_GET['msg']).'</p>';
}
echo '<button type="submit" name="Modif" value="1">Envoyer</button>';
echo '</form>';
echo '</div>';

?>