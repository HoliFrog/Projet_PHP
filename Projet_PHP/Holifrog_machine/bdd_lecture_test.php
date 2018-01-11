<?php
include ("fonctions_PHP_bdd.php");
?>
<div class="price">
		<p classe = "date" ><?php $timezone  = +1; //(GMT +1:00) EST (France) 
		echo "Date du jour : ".gmdate("d/M/Y H:i:s", time() + 3600*($timezone+date("I"))); 
		?> 
	</p>

	<p class="prix"></p>
	<p class="moneyIn"></p>
	<p class="sugarLevel"></p>
	<p class = "info">
		<?php 
		if (isset($_POST['sucre'])){ 

		removeStockSucre($machinecaf,$_POST['sucre']);	}
						?></p>
	<p class="sugarLevel"></p>
	<p class="info"><?php echo rtrim($list_fin,", ")."."; ?></p>
	<form method="post" action="bdd_lecture_test.php">
		<p class="info"></p>
		<div>
			<?php echo createButton($machinecaf)?>
		</div>
	
	
		<p>Combien de sucres???</p>
		<div>
			<input type="radio" name="sucre" value="1">
			<label for="sucreChoice1">1</label>
			<input type="radio" name="sucre" value="2">
			<label for="sucreChoice2">2</label>
			<input type="radio" name="sucre" value="3">
			<label for="sucreChoice3">3</label>
			<input type="radio" name="sucre" value="4">
			<label for="sucreChoice4">4</label>
		</div>
	<div>
		<button type="submit">Validez votre choix!!</button>
	</div>
		
	</form>
</div>
<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
 <a href="bdd_lecture_test_stock.php">Backend de la machine</a> 
</body>

<p classe = "date" ><?php $timezone  = +1; //(GMT +1:00) EST (France) 
		echo "Date du jour : ".gmdate("d/M/Y H:i:s", time() + 3600*($timezone+date("I"))); 
		?> 
	</p>

