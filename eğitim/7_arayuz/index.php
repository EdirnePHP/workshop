<?php
	require "konusArayuz.php";
	require "kedi.php";
	require "kopek.php";

	$kopek = new Kopek();
	echo $kopek->konus();

	$kedi = new Kedi();
	echo $kedi->konus();
?>
