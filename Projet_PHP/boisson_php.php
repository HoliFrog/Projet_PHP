<?php
class boisson {
	public $name;
	public $stock = 1000;
	public $prix;
    public $dose;
    public $lait;
	public $touillette = 'img/add.svg';
    public $img = 'img/cup.svg';
    public $sucre;

	 public function __construct($name,$prix,$dose,){
	 	$this->name = $tname;
        $this->prix = $prix;
        $this->dose = $dose;
        //$this->lait = $lait;
    }
}
	$tea = new boisson ("Thé", 0.4, 10,);
    $coffee = new boisson ("Café", 0.4, 7);
    $verveine = new boisson ("Verveine", 0.45, 10);
    $chocolat = new boisson ("Chocolat", 0.5, 10);



?>