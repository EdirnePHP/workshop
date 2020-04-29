<?php
	class Kus{
		public function __construct($ucabilir,$ayakSayisi){
			$this->ucabilir = $ucabilir;
			$this->ayakSayisi = $ayakSayisi;
		}

		public function ucabilir(){
			return $this->ucabilir;
		}

		public function getAyakSayisi(){
			return $this->ayakSayisi;
		}
	}
?>
