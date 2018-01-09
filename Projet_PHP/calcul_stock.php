<?php
function calcul_stock($boisson){
	$Dose= $boisson->doseProduit;
	$prod = $boisson->produit;
	if ($_SESSION['stock'][$prod]>=$Dose){

		$_SESSION['stock'][$prod]-=$Dose;

	}
	var_dump($_SESSION['stock']);
}

?>