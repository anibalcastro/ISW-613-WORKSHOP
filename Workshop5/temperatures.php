<?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$tamaño = sizeof($temperatures);
$suma = 0;


foreach($temperatures as $it){
    $suma = $suma + $it;
}

$promedio = $suma/$tamaño;

//Promedio
echo "Average Temperature is : $promedio". PHP_EOL; 


//menores
asort($temperatures);

$menores = array();
$iterador = 0;
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

$sMenores = implode(",", $menores);
echo "List of 5 lowest temperatures (no duplicates): $sMenores". PHP_EOL;

//mayores
arsort($temperatures);
$mayores = array();

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

$sMayores = implode(",", $mayores);
echo "List of 5 highest temperatures (no duplicates): $sMayores". PHP_EOL;

