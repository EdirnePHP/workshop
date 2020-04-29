<?php
	require "kullanici.php";
	require "veritabani.php";

	$kullanici = new Kullanici();
	$kullanici->yarat("'kullanici' => 'Emre'");
?>
