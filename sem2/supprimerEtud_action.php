<?php include ("connexion.php"); ?>
<?php
$code=$_POST['code'];
$requet="delete from etudiant where CodeEtudiant = '$code'";
$ok=$idcon->query($requet);
if($ok==FALSE)
echo "Probléme de suppression <br/>";
else
echo "Suppression effectuée avec succes <br/>";
?>
<?php include ("deconnexion.php"); ?>