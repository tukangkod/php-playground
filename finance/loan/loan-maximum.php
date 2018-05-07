<?php
$maxYear = 35;
$interest = 4.65;
$monthlyPayment = 2000;

function getMaxLoanAmount($monthlyPayment, $maxYear, $interest, $decimal=2) {
  // (P/i)[1 − (1+i)^-N]
  $monthlyInterest = $interest / 1200;

  return number_format(($monthlyPayment / $monthlyInterest)*(1 - pow(1 + $monthlyInterest, (($maxYear * 12) * -1))), $decimal);
}

echo getMaxLoanAmount($monthlyPayment, $maxYear, $interest);
