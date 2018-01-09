<?php
session_start();

class recette {
	public $stock;
	public $index;
	public $name;
	public $doseProduit;
	public $produit;	
	public $doseEau;
	public function __construct($newIndex,$newName,$newDoseProduit,$newProduit,$newDoseEau){
		$this->stock;
		$this->index = $newIndex;
		$this->name = $newName;
		$this->doseProduit = $newDoseProduit;
		$this->produit = $newProduit;
		$this->doseEau = $newDoseEau;
        //$this->lait = $lait;
        //création d'instance stocké dans des variables
	}
}
$tea = new recette (0,"Thé",10,"thé", 20);
$expresso = new recette (1,"Expresso",7,"café",8);
$dblExpresso = new recette(2,"Café long",2*$expresso->doseProduit,"café",2*$expresso->doseEau);
$verveine = new recette (3,"Verveine",10,"verveine",20);
$list_boisson = array ($tea->index=>$tea, $expresso->index=>$expresso, $dblExpresso->index=>$dblExpresso, $verveine->index=>$verveine);

if (isset($_POST['boisson'])){
 $select_boisson = $list_boisson[$_POST['boisson']];
 $selectedDose = $select_boisson->doseProduit;
 $selected_produit = $select_boisson->produit;
}



if (!isset($_SESSION['stock'])){
	
	$stock_drink = array("café"=>200,"verveine"=>200,"thé"=>200, "eau"=>200,);
	$_SESSION['stock'] = $stock_drink;
}

?>