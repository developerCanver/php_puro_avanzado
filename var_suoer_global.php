
<?php

//no se puede modificar variables constante 
echo('<pre>');
const CONSTANTE='soy una constante';
echo CONSTANTE;


const COLORES=array('amarillo','azul','rojo');
print_r(COLORES);

// define

define('CONSTANTE2','soy unavariable creada con define y soy constante');

echo CONSTANTE2;