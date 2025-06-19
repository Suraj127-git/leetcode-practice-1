<?php

function addOneToDigits(array $digits): string {
    $n = count($digits);
    $carry = 1; // we are adding 1

    for ($i = $n - 1; $i >= 0; $i--) {
        $sum = $digits[$i] + $carry;
        $digits[$i] = $sum % 10;
        $carry = intdiv($sum, 10); // update carry
    }

    // If carry is still left after the loop, add it to the front
    if ($carry > 0) {
        array_unshift($digits, $carry);
    }

    // Convert to string and return
    return implode('', $digits);
}

// Test Cases
echo addOneToDigits([1, 2, 4]) . "\n"; // Output: 125
echo addOneToDigits([9, 9, 9]) . "\n"; // Output: 1000
