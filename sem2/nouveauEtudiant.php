<htmL>
<head>
	<style>
		.css{
			color: blue;
			font-size: xx-large;
		}
	</style>
</head>
<body>
	<fieldset style="width: 40%">
		<legend class="css"><b>Nouveau Etudiant</b></legend>
		<br>
		<form action="nouveauEtud_action.php" method="post">
	    Veuillez remplir les champs suivants:
	    <br><br>
	    Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="code">
	    <br><br>
	    Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nom">
	    <br><br>
	    Prénom &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="prenom">
	    <br><br>
	    Adresse &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="adr">
	    <br><br>
	    Classe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="classe">
	    <br><br>
	    <input type="reset" name="ann" value="Annuler">
	    &nbsp;
	    <input type="submit" name="enr" value="Enregistrer">
	    </form>
    </fieldset>
</body>
</htmL>