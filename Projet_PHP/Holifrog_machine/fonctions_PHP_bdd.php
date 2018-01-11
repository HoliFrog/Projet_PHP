<?php
// Vérification des erreurs
try
{
	$machinecaf = new PDO('mysql:host=localhost;dbname=machineboisson;charset=utf8','root','');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
//Affiche liste des boissons disponible
function ListBoissonsDispo($database){
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
$list_fin = "Boissons disponibles : ".ListBoissonsDispo($machinecaf);
ListBoissonsDispo($machinecaf);
// Génère des radio boutons pour chaque boissons et les désactive si elles ne sont pas dispo
function createButton ($database){
	$raiponce = $database->query ('SELECT boissons.id, boissons.name , MIN(recettes.quantite <= ingredients.stock) as Dispo
		FROM recettes,ingredients,boissons
		WHERE boissons.id= recettes.boissons_id 
		and recettes.ingredients_id=ingredients.id
		group BY boissons.name');
	$listButton = '';
	while ($donnees =$raiponce->fetch()) {
		$don = intval($donnees['Dispo']);
		if ($don===1) {
			$listButton .= '<input type="radio" name="boisson" value='.$donnees["id"].'><label>'.$donnees["name"].'</label>';
		}
		else {
			$listButton .= '<input disabled type="radio" name="boisson" value='.$donnees["id"].'><label>'.$donnees["name"].'</label>';
		}
	}
	echo "$listButton";
};
//affiche les ingredients et leurs stock
function afficheIngredients($database){
	$raiponce = $database->query ('SELECT ingredients.name, ingredients.stock
		FROM ingredients');
	$tabIngredients = '';
	$stockIngredients = '';
	while ($donnees =$raiponce->fetch()) {
		$tabIngredients .= '<th class ="'.$donnees["name"].'">'.$donnees["name"].'</th>';
		$stockIngredients .= '<td class ="'.$donnees["name"].'">'.$donnees["stock"].'</td>';
	};

	echo '<table><tr>'.$tabIngredients.'</tr><tr>'.$stockIngredients.'</tr></table>';
};
// permet de décémenter les dose indredients au stock de la bdd
function removeStockSucre($database,$qteSucre){
	$qteSucre = intval($qteSucre);
	$stockSucre = $database->query ("SELECT ingredients.stock
		FROM ingredients
		WHERE name ='sucre'");
	$donnees = $stockSucre->fetch()['stock'];

	var_dump ($donnees);
		$donnees = $donnees-$qteSucre;
		$preparedUpdateQuery = $database->prepare("UPDATE `ingredients`
													SET `stock` = :quantiteAMettre
													WHERE `ingredients`.`name` = 'sucre'");		
		$preparedUpdateQuery->execute(array('quantiteAMettre' => $donnees));
	

}
function removeIngredientStock ($database,$ingredientName,$qteIngredient){
	// $ingredient : nom de l'ingrédient
	//$qteIngredient : nombre de grammes de l'ingrédient à retirer au stock
	$stringQuery = "SELECT stock FROM ingredients WHERE ingredients.name = '" .$ingredientName."'";

	$reponse  = $database->query ($stringQuery);
	
	$donnees  = $reponse->fetch();
	var_dump ($donnees);

	$stockIngredient = $donnees['stock'];
	$stockIngredient -= $qteIngredient;
	var_dump($stockIngredient);

	$preparedStringQuery2 = $database->prepare("UPDATE `ingredients` SET `stock` = :quantiteAMettre2 WHERE `ingredients`.`name` = :nomAMettre;");

	$preparedStringQuery2->execute(array('quantiteAMettre2' => $stockIngredient,'nomAMettre'=> $ingredientName));
}	
removeIngredientStock($machinecaf,'I_café',10);
?>