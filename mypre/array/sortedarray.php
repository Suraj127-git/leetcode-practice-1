<?php
function question($array) {
    $n = count($array);
    $i = 0;

    // Two pointer technique
    for ($j = 1; $j < $n; $j++) {
        if ($array[$i] != $array[$j]) {
            $i++;
            $array[$i] = $array[$j];
        }
    }

    // Create final array manually (only first i+1 items)
    $result = [];
    for ($k = 0; $k <= $i; $k++) {
        $result[$k] = $array[$k];
    }

    return $result;
}

print_r(question([1, 1, 2, 3, 3, 4]));
