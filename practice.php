<?php

function integerToRoman($num) {
    $n = intval($num);
    $result = '';

    // Create a lookup array that contains all of the Roman numerals and their values
    $roman_numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($roman_numerals as $roman => $number) {
        // Divide to get matches
        $matches = intval($n / $number);

        // Assign the roman char * $matches
        $result .= str_repeat($roman, $matches);

        // Subtract the value of the matches from the number
        $n = $n % $number;
    }

    
    return $result;
}

// Example usage:
echo integerToRoman(1) . '<br>';     // Output: I
echo integerToRoman(42) . '<br>';    // Output: XLII
echo integerToRoman(1994) . '<br>';  // Output: MCMXCIV
