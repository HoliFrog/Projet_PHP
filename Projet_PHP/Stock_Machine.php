<?php
include_once("Variables.php");
include("calcul_stock.php");

?>

// gestion des stocks
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
	

</head>

<body>
<table>

   <tr>

       <th class ="tea"> Thé</th>

       <th class = "expresso">Expresso</th>

       <th class ="dblExpresso">Café long</th>

       <th class = "verveine">Verveine</th>

        <th class ="sucre">Sucre</th>

   </tr>

   <tr>

       <td class ="stockTea"><?php echo $_SESSION['stock']['thé']?></td>

       <td class ="stockExpresso"><?php echo $_SESSION['stock']['café']?></td>

       <td class ="stockDblExpresso"><?php echo $_SESSION['stock']['café']?></td>

       <td class ="stockVerveine"><?php echo $_SESSION['stock']['verveine']?></td>

       <td class ="stockSucre">0</td>
   </tr>

</table>
<a href="Machine_Cafe.php">Frontend de la machine</a> 
</body>
<?php

	



?>