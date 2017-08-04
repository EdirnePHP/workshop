<?php
    //IF koşul ifadesi
    $a = "PHP";
    $b = 7;

    if($a = "PHP"){
      echo "Başarılı...";
    }elseif($b < 9){
      echo "$b, 9'dan küçüktür.";
    }else{
      echo "Hata veya eksik bilgi";
    }

    //Switch-Case koşul ifadesi
    switch($a){
      case "PHP":
        echo "Merhaba PHP!";
      break;

      case "JSP":
        echo "Merhaba JSP";
      break;

      default:
        echo "Hatalı veya eksik bilgi";
      break;
    }
?>
