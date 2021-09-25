
<?php
//ARRAy indezado

$array=array('lunes','martes','miercoles','jueves','viernes','sabado','domingo');
echo('<pre>');
print_r($array);
foreach ($array as $key => $value) {
    echo($value." ");
}

//array asociativo
$asociativo=array('nombre'=>'carlos','apellido'=>'Ruiz','edad'=>'31','sexo'=>'masculino','signo'=>'Virgo');
//IMPRIMIR ARRAY ASOCIATIVO SE PUEDE ACCEDER  DE ESTA MANERA
echo('<br>');
echo$asociativo['sexo'];
echo('<br>');
print_r($asociativo);

//IMPRIMIR INDICE CON VALOR
foreach ($asociativo as $key => $value) {
    echo("indice: $key --> valor : $value <br>");
}

echo('_______________________________________________________ <br>');
//Array multidimencional
$personas=array(
    array('dayana','lopez','18','1'),
    array('reyna','elizabeth','20','2'),
    array('diana','extrella','18','3'),
    array('nathacha','ramos','5','4'),
    array('yuber','alexander','18','5'),
    array('darguin','lopez','20','6'),
    array('mayer','rivera','25','7'),
    array('claudia','guevara','45','8'),
);
print_r($personas);
foreach($personas as $persona){
    
     foreach ($persona as $key => $value) {
             echo("<br> $key value->>".$value);
        
     }
}

echo('_______________________________________________________ <br>');
//Array multidimencional
$alimentos=array(
    "frutas"=>array('tropical'=>'kiwi','citrico'=>'naranja','accidos'=>'limon','dulce'=>'mango'),
    "caroos"=>array('campero'=>'toyota','ferrary'=>'wemon','deportivo'=>'wilis','camioneta'=>'chebrolect'),
    "carne"=>array('pollo'=>'pechuga','buey'=>'pierna','pescado'=>'aleta','vaca'=>'caveza'),

);
//imprimir un datos sin array
echo($alimentos['carne']['pollo']);
print_r($alimentos);
echo('<br>');

echo('_______________________________________________________ <br>');
echo('<br>');

foreach ($alimentos as $clave => $valor) {
    echo($clave.'<br>');
    foreach ($valor as $key => $val) {
        echo('<br>'.$val);
    }
}