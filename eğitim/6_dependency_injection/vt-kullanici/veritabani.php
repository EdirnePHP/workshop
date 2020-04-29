<?php
	class Veritabani{
		protected static $ornek;

		public static function ornekAl(){
			if(!static::$ornek){
				static::$ornek = new self;
			}
			return static::$ornek;
		}

		public function sorgu($sql){
			echo $sql;
		}
	}
?>
