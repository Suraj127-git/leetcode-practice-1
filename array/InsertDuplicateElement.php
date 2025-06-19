<?php

function insertAdjacentDuplicate(array $arr, int $k): array {
    $n = count($arr);
    $result = [];
    $i = 0;

    while ($i < $n && count($result) < $n) {
        $result[] = $arr[$i];

        // If current element is k and result size is still < n
        if ($arr[$i] == $k && count($result) < $n) {
            $result[] = $k;
        }

        $i++;
    }

    // Trim the result if it exceeds original length
    return array_slice($result, 0, $n);
}

// Test Case
$arr = [1, 0, 2, 3, 0, 4, 5, 0];
$k = 0;

$result = insertAdjacentDuplicate($arr, $k);
print_r($result);
