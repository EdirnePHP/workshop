<?php
	class B extends A{
		public $x;
		public $y;


		public function hesapla($x,$y){
			$this->x = $x;
			$this->y = $y;
			return $this->x + $this->y;
		}
	}

?>
