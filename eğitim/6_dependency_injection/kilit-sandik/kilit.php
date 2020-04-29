<?php
	class Kilit{
		protected $kilitliMi;

		public function kilitle(){
			return $this->kilitliMi = true;
		}

		public function kilitliMi(){
			return $this->kilitliMi;
		}

		public function kilitAc(){
			return $this->kilitliMi = false;
		}
	}
?>
