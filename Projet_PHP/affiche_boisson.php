<?php

function afficheBoisson($list){
		$boissonName ="";
		foreach ($list as  $key =>$boisson){
			$boissonName .= $boisson->name.", ";

		}
		return $boissonName;
	};
	$listBoissonsFinal= "Boissons disponibles : ".afficheBoisson($list_boisson); 

?>