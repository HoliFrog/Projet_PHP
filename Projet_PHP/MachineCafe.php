        


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
	<div><?php

        //création d'une classe qui peux contenir plusieurs instances (objets) qui auront toutes les mêmes propriétés

	class boisson {
		public $name;
		public $stockProduit = 1000;
		public $prix;
		public $doseProduit;
		public $lait;
		public $touillette = 'img/add.svg';
		public $img = 'img/cup.svg';
		public $sucre;
		public $doseEau;

// definition des propriétés prises en compte lors de la création d'une nouvelle instance
		public function __construct($newName,$newPrix,$newDoseProduit,$newDoseEau){
			$this->name = $newName;
			$this->prix = $newPrix;
			$this->doseProduit = $newDoseProduit;
			$this->doseEau = $newDoseEau;
        //$this->lait = $lait;

		}
	}
//création d'instance stocké dans des variables
	$tea = new boisson ("Thé", 0.4, 10,3);
	$expresso = new boisson ("Expresso", 0.5, 7,1);
	$verveine = new boisson ("Verveine", 0.6, 10,3);
	$chocolat = new boisson ("Chocolat", 0.6, 10,2.5);
	$dblExpresso = new boisson("Café long",0.8,14,2);
	$listeBoissons = array ($tea, $expresso, $verveine, $chocolat, $dblExpresso);
//création de la liste d'affichage des boisson
	function afficheBoisson($list){
		$boissonName ="";
		foreach ($list as $boisson){
			$boissonName .= $boisson->name.", ";

		}
		return $boissonName;
	};
	$listBoissonsFinal= "Boissons disponibles : ".afficheBoisson($listeBoissons); 



	


	/*Boisson();*/
	?>

</div>

<div class="big-wraper">

	<div class="price">
		<p classe = "date" ><?php $timezone  = +1; //(GMT +1:00) EST (France) 
		echo "Date du jour : ".gmdate("d/M/Y H:i:s", time() + 3600*($timezone+date("I"))); 
		?> 
		</p>
		<p class="prix"></p>
		<p class="moneyIn"></p>
		<p class="sugarLevel"></p>
		<p class="info"><?php echo rtrim($listBoissonsFinal,", ")."."; ?></p>

</div>
<div class="euros"></div>


<div class="sugar" style="top:175px;">
	<div class="button" style="left:10px;">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
			<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
			<g><path d="M755.6,864.1c28.5,28.9,28.5,75.5,0,104.3s-74.7,28.9-103.2,0l-408-416.2c-28.5-28.9-28.5-75.5,0-104.3l408-416.3c28.5-28.9,74.7-28.9,103.2,0c28.5,28.9,28.5,75.4,0,104.3L421.1,500L755.6,864.1z"/></g>
		</svg>
	</div>
	<div class="led-on led-drink" style="left:50px;top:0px;"></div>
	<div class="led-on led-drink" style="left:75px;top:0px;"></div>
	<div class="led-off led-drink" style="left:100px;top:0px;"></div>
	<div class="led-off led-drink" style="left:125px;top:0px;"></div>
	<div class="button">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
			<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
			<g><path d="M592.6,499.9L592.6,499.9L592.6,499.9l-365.9-381c-9.2-9.4-9-24.9,0.4-34.6l65.4-67c9.4-9.6,24.7-9.8,33.9-0.4l446.9,465.5c4.8,4.8,7,11.4,6.6,17.7c0.2,6.6-2,12.9-6.6,17.7L326.5,983.1c-9.2,9.4-24.5,9.2-33.9-0.4l-65.4-67c-9.4-9.6-9.6-25.2-0.4-34.6L592.6,499.9z"/></g>
		</svg>
	</div>
</div>
<div class="selection">
	<div class="drink " style="top:205px;">
		<div class="drink-name">
			<font style="color:#fff"><?php echo $dblExpresso->name; ?></font>
		</div>
		<div class="led-off led-drink" id="coffee" style="left:130px;"></div>
		<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
	</div>

	<div class="drink " style="top:205px;">
		<div class="drink-name">
			<font style="color:#fff"><?php echo $expresso->name; ?></font>
		</div>
		<div class="led-off led-drink" id="coffee" style="left:130px;"></div>
		<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
	</div>
	<div class="drink" style="top:235px;">
		<div class="drink-name ">
			<font style="color:#fff"><?php echo $tea->name; ?></font>
		</div>
		<div class="led-off led-drink" id="tea" style="left:130px;"></div>
		<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
	</div>
	<div class="drink" style="top:265px;">
		<div class="drink-name">
			<font style="color:#fff"><?php echo $verveine->name; ?></font>
		</div>
		<div class="led-off led-drink" id="verveine" style="left:130px;"></div>
		<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
	</div>
	<div class="drink" style="top:295px;">
		<div class="drink-name">
			<font style="color:#fff"><?php echo $chocolat->name; ?></font>
		</div>
		<div class="led-off led-drink" id="chocolat" style="left:130px;"></div>
		<div class="btn btn btn-info btn-lg button"> <span class="glyphicon glyphicon-check"></span> </div>
	</div>
</div>
<!-- <div class="led-off led-drink" style="left:130px;"></div> -->
<div class="coins">
	<button class='piece' value="0.05">0.05</button>
	<button class='piece' value="0.10">0.10</button>
	<button class='piece' value="0.20">0.20</button>
	<button class='piece' value="0.50">0.50</button>
	<button class='piece' value="1.00">1.00</button>
	<button class='piece' value="2.00">2.00</button>
</div>
<div class="rs-button">

	<div class="coin-reset btn btn-warning">Reset</div>
	<div class="button-submit btn btn-warning">Submit</div>
</div>


<div class="coinsSlot">
</div>
<div class="cup-sortir">
	<img id='spoon' src="" width="50">
	<img id='img' src="img/" alt="" height="60">
	<div class="recipe">
		<p class='messag'></p>
	</div>

</div>


</div>
<div class="all-stock">

	<div class="stock">
		<p>Coffee</p>
		<div class="coffee-stock drink-stock">
		</div>
		<div class="coffee-level drink-level"></div>
	</div>
	<div class="stock">
		<p>tea</p>
		<div class="tea-stock drink-stock">
		</div>
		<div class="tea-level drink-level"></div>
	</div>
	<div class="stock">
		<p>Verveine</p>
		<div class="verveine-stock drink-stock">
		</div>
		<div class="verveine-level drink-level"></div>
	</div>
	<div class="stock">
		<p>Chocolat</p>
		<div class="chocolat-stock drink-stock">
		</div>
		<div class="chocolat-level drink-level"></div>
	</div>
	<table>
		<tr>
			<td>
				5ct
			</td>
			<td>
				10ct
			</td>
			<td>
				20ct
			</td>
			<td>
				50ct
			</td>
			<td>
				1€
			</td>
			<td>
				2€
			</tr>
			<tr>
				<td>

					<div  class="c0" style="z-index: 1;"> <img src="images/coin.png" class="c0"></div>
					<button class = "addCoins coins" value= "0">+</button><button class = "removeCoins coins" value= "0">-</button>
				</td>
				<td>
					<div class="c0" style="z-index: 1;"> <img src="images/coin.png" class="c1"></div>
					<button class = "coins addCoins" value= "1">+</button><button class = "coins removeCoins" value= "1">-</button>

				</td>
				<td>
					<div class="c0" style="z-index: 1;"> <img src="images/coin.png" class="c2"></div>
					<button class = "coins addCoins" value= "2">+</button><button class = "coins removeCoins" value= "2">-</button>
				</td>
				<td>
					<div class="c0" style="z-index: 1;"> <img src="images/coin.png" class="c3"></div>
					<button class = "coins addCoins" value= "3">+</button><button class = "coins removeCoins" value= "3">-</button>
				</td>
				<td>
					<div class="c0" style="z-index: 1;"> <img src="images/coin.png" class="c4"></div>
					<button class = "coins addCoins" value= "4">+</button><button class = "coins removeCoins" value= "4">-</button>
				</td>
				<td>
					<div class="c0" style="z-index: 1;"> <img src="images/coin.png" class="c5"></div>
					<button class = "coins addCoins" value= "5">+</button><button class = "coins removeCoins" value= "5">-</button>
				</td>
			</tr>
		</table>
	</div>


</p>

</body>
</html>