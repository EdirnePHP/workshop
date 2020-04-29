<?php
	require "sandik.php";
	require "kilit.php";

	$sandik = new Sandik(new Kilit);
	$sandik->kapat();
	$sandik->ac();
?>
