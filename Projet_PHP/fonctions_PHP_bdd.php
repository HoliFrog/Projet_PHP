<?php
try
{
	$machinecaf = new PDO('mysql:host=localhost;dbname=machineboisson;charset=utf8','root','');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
function FunctionListBoissons($database){
	$raiponce = $database->query ('SELECT boissons.name 
		FROM recettes,ingredients,boissons
		WHERE boissons.id= recettes.boissons_id 
		and recettes.ingredients_id=ingredients.id
		group BY boissons.name
		HAVING MIN(recettes.quantite <= ingredients.stock) != 0');
	$list = '';
	while ($donnees =$raiponce->fetch()) {

		$list .= $donnees['name'].', ';
		
	}
	$raiponce->closeCursor();
	return $list;
}
$list_fin = "Boissons disponibles : ".FunctionListBoissons($machinecaf);
FunctionListBoissons($machinecaf);



?>