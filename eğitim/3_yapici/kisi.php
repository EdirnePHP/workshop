<?php
	class Kisi{
		public $ad;
		public $yas;

		public function __construct($ad,$yas){
			$this->ad = $ad;
			$this->yas = $yas;
		}

		public function tumce(){
			return $this->ad.' '.$this->yas.' yaşındadır.';
		}
	}
?>
