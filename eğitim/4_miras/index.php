<?php
	require "penguen.php";

	$penguen = new Penguen(false,2);

	if($penguen->ucabilir()){
		echo "uçabilir";
	}else{
		echo "uçamaz";
	}
?>
