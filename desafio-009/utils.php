<?php 
    function formatNumber($num){
        return number_format($num, 2, ',', '.');
    }

    function calculateAverage ($value1, $value2){
        return formatNumber(($value1 + $value2) / 2);
    }

    function calculateWeightedAverage($value1, $value2, $weight1, $weight2){
        $sum = $value1 * $weight1 + $value2 * $weight2;
        return formatNumber($sum / ($weight1 + $weight2));
    }
?>