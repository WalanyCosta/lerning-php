<?php 
    const MINSALARYDEFAULT = 1380;
    
    function restMinSalary ($salary){
        if($salary < MINSALARYDEFAULT){
            return 0;
        }
        return $salary % MINSALARYDEFAULT;
    }

    $calculateMinimumSalary = function($salary){
        $minSalary = floor($salary / MINSALARYDEFAULT);
        $rest = call_user_func('restMinSalary', $salary);
        return ['minSalary' => $minSalary, 'rest' => $rest];
    };

    function FormatCurrent($number){
        $defaultCurrent = numfmt_create('pt-ao', NumberFormatter::CURRENCY);
        return numfmt_format_currency($defaultCurrent, $number, 'AOA');
    }
?>