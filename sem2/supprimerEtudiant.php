<!DOCTYPE html>
<html>
<head>
	<style>
		.cff{
			color: blue;
			font-size: xx-large;
		}
	</style>
</head>
<body>
	<fieldset style="width: 50%">
		<legend class="cff"><b>Supprimer un Etudiant</b></legend>  
		<form action="supprimerEtud_action.php" method="post"> 
	    <br>
	    Veuillez remplir les champs suivants:
	    <br><br>
	    Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="code">
	    <br><br> 
	    <input type="reset" name="int" value="Annuler">
	    &nbsp;
	    <input type="submit" name="inin" value="Executer">
    </fieldset>
</body>
</html>