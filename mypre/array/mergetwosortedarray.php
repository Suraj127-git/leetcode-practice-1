function question($array1, $array2) {
    $n1 = count($array1);
    $n2 = count($array2);
    $array = [];
    $i = 0;
    $j = 0;

    // Loop through both arrays using two pointers
    while ($i < $n1 && $j < $n2) {
        if ($array1[$i] < $array2[$j]) {
            $array[] = $array1[$i];
            $i++;
        } else {
            $array[] = $array2[$j];
            $j++;
        }
    }
    print_r($array);
    // Add remaining elements from array1
    while ($i < $n1) {
        $array[] = $array1[$i];
        $i++;
    }

    // Add remaining elements from array2
    while ($j < $n2) {
        $array[] = $array2[$j];
        $j++;
    }

    return $array;
}

print_r(question([1, 3, 5], [2, 4, 6]));