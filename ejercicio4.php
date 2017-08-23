<!--funcion que muestre las operaciones sumar, restar, multiplicar, dividir, potencia y raiz.
Debe mostrar por pantalla la operacion y resultado-->
<?php

function operaciones ($n1, $n2, $operacion){
  $resultado = 0;

  if($operacion == "sumar"){
    $resultado =  $n1 + $n2;

  }else if($operacion ==  "restar"){
    $resultado = $n1 - $n2;

  }else if($operacion == "multiplicar"){
    $resultado = $n1 * $n2;
  }
  if($operacion == "divir"){
    $resultado =  $n1 / $n2;

  }else if($operacion ==  "potencia"){
    $resultado=pow($n1,$n2);


  }else if($operacion == "raiz"){
    $resultado=sqrt($n1);
    $resultado=sqrt($n2);

  }


  return $resultado;

}
 ?>
