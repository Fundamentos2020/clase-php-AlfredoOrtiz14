<?php
$a = 'Holi';
$b = 3;
$c = 5.5;
echo $a . " " . $b . " " . $c;
//. para concatenar

$array1 = array();
$array2 = array();

$array1[] = 1;
$array1[] = 2;
$array1[] = $a;

var_dump($array1);

echo " ";

$array2['cve_unica'] = '260786';
$array2['nombre'] = 'Alfredo';
$array2['apellidos'] = 'Ortiz';

//json de back a front
$json = json_encode($array2);

var_dump($array2);
echo " ";
var_dump($json);

//json de front a back
$json1 = '{"cve_unica":"260786","nombre":"Alfredo","apellidos":"Ortiz"}';
$alu = json_decode($json1);
echo " ";
echo " ";
echo $alu->cve_unica;

//funcion
function miFuncion(){
    global $a;
    $a = "Cambiar";
}

miFuncion();
echo $a;

//clases
class Aux{
    public $x;
    public $y;
}

$aux = new Aux();
$aux->x = "valor X";

echo $aux->x
?>