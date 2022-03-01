<?php
//******************************************************************************* */
//******************************************************************************* */
//Arreglo inicial de las temperaturas
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

//Averiguo tamaño
$tamaño = sizeof($temperatures);
//Inicializo la variable suma
$suma = 0;

/**
 * Recorro el arreglo temperatures
 * Suma
 */
foreach($temperatures as $it){
    $suma += $it;
}

//Se almacena el promedio
$promedio = $suma/$tamaño;

//Imprime el promedio
echo "Average Temperature is : $promedio". PHP_EOL; 

//******************************************************************************* */
//******************************************************************************* */

//menores
//Ordeno de manera ascendente
asort($temperatures);

//Arreglo donde almacena menores
$menores = array();

//Iterador
$iterador = 0;

/**
 * Recorre el arreglo
 * Valida si ya lleva 5 elementos
 * Pregunta si ya existe
 * Agrega al arreglo
 */
foreach($temperatures as $min){
    if ($iterador === 5){
        $iterador = 0;
        break;
    }else{
        if (!in_array($min, $menores)){
            array_push($menores, $min);
            $iterador+=1;
        }
    }
}

//Convierto array en string
$sMenores = implode(",", $menores);
//Imprimo
echo "List of 5 lowest temperatures (no duplicates): $sMenores". PHP_EOL;

//******************************************************************************* */
//******************************************************************************* */
//mayores
//Ordeno de manera descendentee
arsort($temperatures);
//Arreglo que almacena mayores
$mayores = array();

/**
 * Recorre el arreglo
 * Valida si ya lleva 5 elementos
 * Pregunta si ya existe
 * Agrega al arreglo
 */
foreach($temperatures as $max){
    if ($iterador === 5){
        $iterador = 0;
        break;
    }else{
        if (!in_array($max, $mayores)){
            array_push($mayores, $max);
            $iterador+=1;
        }
    }
}

//Convierto array en string
$sMayores = implode(",", $mayores);
//Imprimo
echo "List of 5 highest temperatures (no duplicates): $sMayores". PHP_EOL;

