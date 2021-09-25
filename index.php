
<?php
//funcion ocn variables globales
function variableGlobal(){
    $local="variable local <br>";
    //llama la variavble global
    echo $GLOBALS['global'];
    echo $local;
}

$global="<br> Esta variabl es Global <br>";

variableGlobal();
?>