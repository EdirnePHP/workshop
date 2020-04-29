<?php
	class Makine{
		protected $sonuc;
		protected $islem;

		public function islemSec(islemArayuz $islem){
			$this->islem = $islem;
		}

		public function hesapla(){
			foreach(func_get_args() as $sayi){
				$this->sonuc = $this->islem->islem($sayi,$this->sonuc);
			}
		}

		public function sonucGoster(){
			return $this->sonuc;
		}
	}

?>
