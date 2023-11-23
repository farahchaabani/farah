<?php
require("connect.php");
$req="INSERT INTO etudiant VALUES (103, 'hajji', 'Doe', 'hajji@example.com', 'SEM2')";
$result=$con->query($req);
var_dump($result);
if($result==true){
	echo "insertion avec succés";
	}
	else{
	echo "erreur dans l'ajout des données";
	echo $con->error;
}	 
?>