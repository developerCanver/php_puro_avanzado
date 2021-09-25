
<?php

$variable='20 hola mundo';
//$suma=20+$variable;
//echo $suma;
//convertir numero entero de un String
$convertir=(int)$variable;

$convertir2=intval($variable);
echo($convertir2);

//Convertir un float de un String

$floa=(floatval($variable));
echo($floa);

$floa2=(float)($variable);

echo($floa);
echo($floa2);

//separar por un caracter un array

$arr=array('color','azul','naranja','tomate');
echo('<pre>');
print_r($arr);

$convertirarr=implode(' ',$arr);
echo$convertirarr;