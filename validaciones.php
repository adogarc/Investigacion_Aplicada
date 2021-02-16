<?php

if (isset($_POST['submit'])) {//Validamos que las variables que se reciben vienen del boton name='submit'
    $patron = '/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|622((12[6-9]|1[3-9][0-9])|([2-8][0-9][0-9])|(9(([0-1][0-9])|(2[0-5]))))[0-9]{10}|64[4-9][0-9]{13}|65[0-9]{14}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})*$/';
    //$duiPattern = '/^[0-9]{9}$/';
    $duiPattern = '/^\d{8}-\d{1}$/';
    //$duiPattern = '/^([0-9]{9})|(\d{8}-\d{1})$/';
    if (empty($name)) {
        echo "<p class='text-danger'>Agrega tu nombre</p>";
    }
    if (!preg_match($duiPattern, $dui)) {
        echo "<p class='text-danger'>Agrega tu dui válido</p>";
    }
    else{
        echo "<p class='text-success'>Dui correcto</p>";
    } 
    if (empty($card)) {
        echo "<p class='text-danger'>Agrega tu tarjeta</p>";
    }else{
        if (!preg_match($patron, $card)) {
            echo "<p class='text-danger'>Su numero de tarjeta: $card no tiene el formato correcto</p>";
        }
      else{
          echo "<p class='text-success'>Tarjeta correcta $card </p>";
      } 
    }
}


?>