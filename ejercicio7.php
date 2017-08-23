<!--funcion que valide si el caracter introducido es numero y muestre por pantalla el resultado-->
<?php
function caracter($n){
  if ($n=='0' or $n=='1' or $n=='2' or $n=='3' or $n=='4' or $n=='5' or $n=='6' or $n=='7' or $n=='8' or $n=='9') {

    echo "El caracter $n es un numero";
  }
  else {
    echo "No es un número";
  }

}
 ?>
