<?php
	require "baslik.php";

	$c = new Makine;

	$c->islemSec(new Toplama);
	$c->hesapla(10,50);

	$c->islemSec(new Cikarma);
	$c->hesapla(30);

	$c->islemSec(new Carpma);
	$c->hesapla(5);

	$c->islemSec(new Bolme);
	$c->hesapla(2);

	echo $c->sonucGoster();
?>
