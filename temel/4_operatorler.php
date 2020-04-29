<?
  /*
  Atama İfadeleri
  --------------------
  =     atama
  .     birleştirme
  */

  $deger1 = 5;
  $deger2 = "Merhaba Dünya!";
  $deger3 = 3.14;

  $str1 = "Merhaba";
  $str2 = "Dünya!";
  echo $str1." ".$str2;

  /*
  Aritmetik İfadeler
  -------------------
  +   toplama
  -   çıkarma
  *   çarpma
  /   bölme
  %   mod
  **  üs alma
  ++  arttırma
  --  azaltma
  */

  $a = 5;
  $b = 7;

  $c = 8;
  $d = 2;

  echo $a + $b."<br>";
  echo $a - $b."<br>";
  echo $a * $b."<br>";
  echo $c / $d."<br>";
  echo $b % $a."<br>";
  //echo $a**$d;
  echo $a++."<br>";
  echo $b--."<br>";

  $a = $a + $b;
  $a += $b;


  /*
  Mantıksal İfadeler
  --------------------
  &&   ve (and)
  ||   veya (or)
  ^    özel veya (xor)
  !    olumsuz
  */

  $a = true && false;
  var_dump($a);
  $c = true && true;
  var_dump($c);
  $a = true || false;
  var_dump($a);
  $b = false || true;
  var_dump($b);
  $c = true ^ false;
  var_dump($c);
  $d = false ^ false;
  var_dump($d);
  $e = true;
  var_dump(!$e);

  /*
  Karşılaştırma İfadeleri
  -----------------------
  ==     eşittir
  ===    denktir
  !=     eşit değildir
  !==    denk değildir
  <>     eşit değildir
  <      küçüktür
  >      büyüktür
  <=     küçük eşittir
  >=     büyük eşittir
  <=>    min/max
  */

  $a = 42;
  $b = 20;

  if( $a == $b ) {
    echo "TEST1 : a is equal to b<br/>";
  }else {
    echo "TEST1 : a is not equal to b<br/>";
  }

  if( $a > $b ) {
    echo "TEST2 : a is greater than  b<br/>";
  }else {
    echo "TEST2 : a is not greater than b<br/>";
  }

  if( $a < $b ) {
    echo "TEST3 : a is less than  b<br/>";
  }else {
    echo "TEST3 : a is not less than b<br/>";
  }

  if( $a != $b ) {
    echo "TEST4 : a is not equal to b<br/>";
  }else {
    echo "TEST4 : a is equal to b<br/>";
  }

  if( $a >= $b ) {
    echo "TEST5 : a is either greater than or equal to b<br/>";
  }else {
    echo "TEST5 : a is neither greater than nor equal to b<br/>";
  }

  if( $a <= $b ) {
    echo "TEST6 : a is either less than or equal to b<br/>";
  }else {
    echo "TEST6 : a is neither less than nor equal to b<br/>";
  }

?>
