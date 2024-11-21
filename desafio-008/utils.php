<?php 

$format = function ($number){
    return number_format($number, 3, ',', '.');
};

function calculateSquare ($number){
    return $GLOBALS['format'](sqrt($number));
};

function calculateCube ($number){
    global $format;

    return $format($number ** (1/3));
};

function calculateSquareAndCube($number){
    $square = calculateSquare($number);
    $cube = calculateCube($number);

    return ['square'=> $square, 'cube'=> $cube];
}

?>