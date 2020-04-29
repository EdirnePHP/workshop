<?php
	class Sandik{
		protected $kilitle;
		protected $kapaliMi;

		public function __construct(Kilit $kilitle){
			return $this->kilitle = $kilitle;
		}

		public function kapat($kilitle = true){
			if($kilitle === true){
				$this->kilitle->kilitle();
			}
			$this->kapaliMi = true;
			echo "Kapalı";
		}

		public function kapaliMi(){
			return $this->kapaliMi;
		}

		public function ac(){
			if($this->kilitle->kilitliMi()){
				$this->kilitle->kilitAc();
			}
			$this->kapaliMi = false;
			echo "Açık";
		}
	}
?>
