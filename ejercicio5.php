<!--funcion que pida por pantalla una temperatura en grados celsius, muestre un menu para
convertirlos a fahrenheit o kelvin y muestre el equivalente por pantalla-->
<?php

function temperatura ($n, $conversion){


  switch ($conversion){
      case "tfarenheit":
         $conversion=($n*1.8)+32;
          echo "la conversion de $n grados celsius a grados farenheit es: $conversion";
          break;
      case "tkelvin":
           $conversion=$n+ 273.15;
          echo "la conversion de $n  grados celsius a grados kelvin es: $conversion";
          break;
      }
   }
 ?>
