<!DOCTYPE html>
<html>
<head></head>
<body>
	<fieldset style="width: 40%">
		<legend><b>Nouveau Etudiant</b></legend>
		<form action="modifierEtud_action.php" method="post">
		<br>
	    Veuillez remplir les champs suivants:
	    <br><br>
	    Code <input type="number" name="code">
	    <br><br>
	    Nom <input type="text" name="nom">
	    <br><br>
	    Prénom <input type="text" name="prenom">
	    <br><br>
	    Adresse <input type="text" name="adr">
	    <br><br>
	    Classe <input type="text" name="classe">
	    <br><br>
	    <input type="reset" name="ann" value="Annuler">
	    &nbsp;
	    <input type="submit" name="enr" value="Modifier">
    </fieldset>
</body>
</html>