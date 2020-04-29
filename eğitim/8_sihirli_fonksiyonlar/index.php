<?php
	class Sinifim{
		public $a;

		public function __construct($a){
			$this->a = $a;
		}

		public function __destruct(){
			$this->a = NULL;
		}

		public function __get($degisken){
			echo "<b>".get_class($this)."</b> sınıfında <b>{$degisken}</b> adında bir değişken yok.";
		}

		public function __set($degisken,$parametre){
			echo "<b>".get_class($this)."</b> sınıfında <b>{$degisken}</b> değişkeninde <b>{$parametre}</b> adında bir parametre yok.";
		}

		public function __call($metod,$param){
			echo "<b>".get_class($this)."</b> sınıfında <b>{$metod}</b> metodu tanımlı değildir ve <b>".implode(', ', $param)."</b> adında bir parametre yok.";
		}

		/*public function __callstatic($metod,$param){
			echo "<b>".get_class($this)."</b> sınıfında <b>{$metod}</b> statik metodu tanımlı değildir ve <b>".implode(', ', $param)."</b> adında bir parametre yok.";
		}*/

		public function __invoke($param){
			echo implode(', ', $param) . " parametreler gönderilmiş bir __invoke() metoduyum.";
		}

		//__tostring()
		//__clone()
		//__isset()
		//__unset()
		//__set_stage()
		//__sleep()
		//__wakeup()


	}



	$nesne = new Sinifim("Ali");

	//echo $nesne->ad;  //get
	//echo $nesne->ad = "Emre";  //set
	//echo $nesne->ad("Emre");  //call
	//$nesne("Emre");
?>
