<?php 

function toRoman($number){
    $number = intval($number);
    $result = '';
    $romanNumerals = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    );
    foreach ($romanNumerals as $roman => $value){
        $matches = intval($number / $value);
        $result .= str_repeat($roman, $matches);
        $number = $number % $value;
    }
    return $result;

}

function toNumber($romawi){
    $result = 0;
    $romanNumerals = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    );
    foreach ($romanNumerals as $roman => $value){
      while (strpos($romawi, $roman) === 0){
        $result += $value;
        $romawi = substr($romawi, strlen($roman));
      }
    }
    return $result;
}