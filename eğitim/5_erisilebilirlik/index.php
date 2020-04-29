<?php
	require "kus.php";
	require "kumru.php";
	require "penguen.php";

	#$kus = new Kus(true,2);
	#echo $kus->getLegCount();

	/*
	$kumru = new Kumru(true,2);
	//echo $kumru->getAyakSayisi();
	if($kumru->ucabilir()){
		echo "uçabilir";
	}else{
		echo "uçamaz";
	}*/


	$penguen = new Penguen(false,2);
	/*if($penguen->ucabilir()){
		echo "uçabilir";
	}else{
		echo "uçamaz";
	}*/
	$penguen->foo();
?>
