<?php

function cyclicSort($input, $order)
{
    if ($order < 1) {
        return false;
    }

    $char = str_split($input);
    $count = 1;
    $now = 0;
    $newArr = [];
    do {
        if ($now >= count($char)) {
            $now = 0;
        }

        if ($count === $order) {
            $count = 0;
            $newArr[] = $char[$now];
            unset($char[$now]);
            $char = array_values($char);
        }
        else {
            $now++;
        }

        $count++;
    }

    while (count($char) != 0);
    return implode("", $newArr);
}

echo cyclicSort("ABCDEFGHIJ", 7);
echo "<br />";
echo cyclicSort("0123456789ABCDEF", 11);
