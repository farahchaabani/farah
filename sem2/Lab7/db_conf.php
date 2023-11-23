<?php
$idcon=mysqli_connect("localhost" ,"root", "");
if($idcon)
 {
 	echo "Connexion réussite <br/>" ;
 	$okbd=mysqli_select_db($idcon,"cv");
 	if($okbd==TRUE)
 		echo "<br/>Base correcte <br/>";
 	else
 		echo "<br/>Base incorrecte <br/>";
 }
 else
 	echo "Erreur de connexion avec le serveur:<br/>";
?>

