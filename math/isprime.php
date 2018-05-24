<?php
// get prime number
// failed only on hhvm < 3.21.3

function isPrime($num) {
    if ($num <= 1) return 0;

    for($i = 2; $i < $num; $i++) {
          if ($num % $i == 0) {
              return 0;
          }
     }

     return 1;
}

$prime = ["false", "true"];

for ($i = 0; $i <= 15; $i++) {
    echo "Number {$i} is Prime Number: {$prime[isPrime($i)]}\n";
}

