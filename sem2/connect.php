<?php
$con=new mysqli("localhost", "root", "", "biblio");
//var_dump($con);
if ($con->connect_error==null)
{
	echo "connexion établie";
}
else
{
	echo "connexion echoué";
}
?>