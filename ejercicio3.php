<!--funcion que calcule el precio promedio de un articulo considerado que se conoce el precio del articulo en tres establecimientos
    distintos. debe mostrar por pantalla los tres establecimientos con su precio y el precio promedio -->
    <?php

    function producto ($exito, $olimpica, $mercado){
      $resultado = 0;

      $resultado =  ($exito + $olimpica + $mercado) / 3;

         echo "El promedio de el producto es: $resultado <br><br> ";
        echo "El precio de la paca de arroz en el exito es: $exito  <br><br> ";

        echo "El precio de la paca de arroz en la olimpica es: $olimpica   <br><br> ";

        echo "El precio de la paca de arroz en el mercado es: $mercado   <br><br> ";


    }
     ?>
