<?php
include("Variables.php");
include("prepa_boisson.php");
include("affiche_boisson.php");

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="my_style.css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <link rel="stylesheet" type="text/css" href="my_style.css"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="coffee_machine.js"></script>
	<script src="function.js"></script>

</head>

<body>
	<div class="price">
		<p classe = "date" ><?php $timezone  = +1; //(GMT +1:00) EST (France) 
		echo "Date du jour : ".gmdate("d/M/Y H:i:s", time() + 3600*($timezone+date("I"))); 
		?> 
	</p>

	<p class="prix"></p>
	<p class="moneyIn"></p>
	<p class="sugarLevel"></p>
	<p class = "info">
		<?php if (isset($_POST['boisson'])){ 

		preparerBoisson($select_boisson,nombre_sucre());	}
						?></p>
	<p class="sugarLevel"></p>
	<p class="info"><?php echo rtrim($listBoissonsFinal,", ")."."; ?></p>
	<form method="post" action="Machine_cafe.php">
		<p class="info"></p>
		<div>
			<input type="radio" 
			name="boisson" value="0">
			<label>Thé</label>

			<input type="radio" 
			name="boisson" value="1">
			<label>Expresso</label>

			<input type="radio" 
			name="boisson" value="2">
			<label>Café long</label>

			<input type="radio" 
			name="boisson" value="3">
			<label>Verveine</label>
		</div>
	
	
		<p>Combien de sucres???</p>
		<div>
			<input type="radio" 
			name="sucre" value="1">
			<label for="sucreChoice1">1</label>

			<input type="radio" 
			name="sucre" value="2">
			<label for="sucreChoice2">2</label><input type="radio" 
			name="sucre" value="3">
			<label for="sucreChoice3">3</label><input type="radio" 
			name="sucre" value="4">
			<label for="sucreChoice4">4</label>
		</div>
	<div>
		<button type="submit">Validez votre choix!!</button>
	</div>
		
	</form>
</div>
<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
 <a href="Stock_Machine.php">Backend de la machine</a> 
</body>

<?php

/*echo ($_POST['boisson']);
echo ($_POST['sucre']);*/

?>