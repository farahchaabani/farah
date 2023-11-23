<?php
if (isset($_GET['nomPers'])and !empty($_GET['nomPers'])){
	$nom=$_GET['nomPers'];
	echo "votre nom est $nom";
}else{
	echo "valeur invalide";
}
?>