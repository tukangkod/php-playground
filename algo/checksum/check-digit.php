<?php
function checkDigit($num) {
    $a = [];
    $b = [];
    $c = [];
  
    $char = str_split((string) $num);
    for ($i = 0; $i < count($char); $i+=3) {
        $a[] = $char[$i] * 3;
        $b[] = $char[$i+1] * 5;
        $c[] = $char[$i+2] * 7;
    }
  
    $sum = 0;
    foreach([$a, $b, $c] as $ph) {
        $sum += array_sum($ph);
    }

    do {
        $sum = array_sum(str_split((string) $sum));
        if ($sum < 10) {
            break;
        }
    } while(1);

    return $sum;
}

echo checkDigit(543215432154321); // 9
