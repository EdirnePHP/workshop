#!/usr/bin/php

//yukarıda yer alan hashbang sadece Unix benzeri sistemlerde kullanılır (GNU/Linux ve Macintosh)
<?php
  //Değişken tanımlamaları
  $sayi = 5;
  $kesir = 3.14;
  $dizi = array(1,2,3);
  $metin = "Merhaba dünya!..";

  //Tanımlanan değişkenleri yazdırma
  echo $sayi."\n";    //echo komutu tek değeri olan değişkenler için kullanılır
  echo $kesir."\n";
  echo $metin."\n";
  print_r($dizi);     //print_r komutu birden fazla değeri olan değişkenler için kullanılır


  echo "\n";

  //Tanımlanan değişkenlerin türleri var_dump() fonksiyonu ile döndürülür
  echo var_dump($sayi)."\n";
  echo var_dump($kesir)."\n";
  echo var_dump($metin)."\n";
  echo var_dump($dizi)."\n";
?>
