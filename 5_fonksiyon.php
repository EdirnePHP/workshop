<?
  /*
  Fonksiyonlar
  --------------------
  */

//Genel Fonksiyon
function myFunc(){         //parametresiz, void tipi
  echo "Merhaba dünya!..<br>";
}

function myFunc2($param){  //parametreli, değer döndüren
  return $param;
}

myFunc();

echo myFunc2(5 + 7);

//Anonim Fonksiyon (PHP 5.4)

$fonk = function($p){
  echo $p."<br>";
}

$fonk("anonim fonksiyon");
$fonk(3.14);
?>
