<?php include ("connexion.php"); ?>
<?php
   $code=$_POST['code'];
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $adresse=$_POST['adr'];
   $classe=$_POST['classe'];
$requet="update etudiant set Nom='$nom', Prenom='$prenom', Adresse ='$adresse', Classe='$classe' where CodeEtudiant='$code'";
$ok=$idcon->query($requet);
if($ok==TRUE)
echo "Modifié avec succés <br/>";
else
echo "Probléme de modification <br/>";
?>
<?php include ("deconnexion.php"); ?>