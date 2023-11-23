<?php include ("connexion.php"); ?>
<?php
   $code=$_POST['code'];
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $adresse=$_POST['adr'];
   $classe=$_POST['classe'];
   $requet="insert into etudiant values('$code','$nom','$prenom','$adresse','$classe')";
   

   $ok=$idcon->query($requet);
   if($ok==TRUE)
    echo "Enregistré avec succés, connectez-vous! <br/>";
   else
    echo "Votre e-mail existe déjà <br/>";
?>
<?php include ("deconnexion.php"); ?>