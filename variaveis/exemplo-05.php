<?php 

$nome = "Bruno";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome = "Braga";
	echo $nome." agora no teste2";
}

teste();

teste2();

?>