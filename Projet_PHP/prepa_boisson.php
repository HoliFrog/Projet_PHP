// création de la fonction de préparation des boissons

<?php
include("calcul_stock.php");
function nombre_sucre(){
	$nb_sucre = 0;
	if (isset($_POST['sucre'])){
		$nb_sucre =intval($_POST['sucre']);
	} else {
		echo '<p> Ok, sans sucre alors!!!</p>';
	}

	return $nb_sucre;

}

function preparerBoisson($boissonName,$nbSucre){
	$phrase = " grammes de ";
	$phraseau = " centilitres d'eau ";
	$recette = "";

	if(isset($_POST['boisson'])){

		if ($nbSucre===0){
			$recette = $boissonName->doseProduit.$phrase.$boissonName->produit.", ".$boissonName->doseEau.$phraseau." et ".$nbSucre." sucres.";

		}else if ($nbSucre>0) {
			$recette = $boissonName->doseProduit.$phrase.$boissonName->produit.", ".$boissonName->doseEau.$phraseau." et ".$nbSucre." sucres.";
		};
	}else {
		echo "Choisissez votre boisson";
	}

	echo $recette;
	calcul_stock($boissonName);
}

?>