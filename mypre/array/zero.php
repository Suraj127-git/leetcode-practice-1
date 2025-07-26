<?php
function question($array) {
    $n = count($array);
    $i = 0;

    // Step 1: Move all non-zero elements to the front
    for ($j = 0; $j < $n; $j++) {
        if ($array[$j] != 0) {
            $array[$i] = $array[$j];
            $i++;
        }
    }

    // Step 2: Fill remaining positions with zero
    while ($i < $n) {
        $array[$i] = 0;
        $i++;
    }

    return $array;
}

print_r(question([0, 1, 0, 3, 12]));
