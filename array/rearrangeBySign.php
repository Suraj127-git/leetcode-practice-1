<?php

function rearrangeBySign(array $arr): array {
    $pos = [];
    $neg = [];

    // Separate positives and negatives
    foreach ($arr as $num) {
        if ($num >= 0) {
            $pos[] = $num;
        } else {
            $neg[] = $num;
        }
    }

    $result = [];
    $i = 0;

    // Alternate from both arrays
    while ($i < count($pos) || $i < count($neg)) {
        if ($i < count($pos)) {
            $result[] = $pos[$i];
        }
        if ($i < count($neg)) {
            $result[] = $neg[$i];
        }
        $i++;
    }

    return $result;
}

// Test
print_r(rearrangeBySign([1, 2, 3, -4, -1, 4]));
print_r(rearrangeBySign([-5, -2, 5, 2, 4, 7, 1, 8, 0, -8]));
