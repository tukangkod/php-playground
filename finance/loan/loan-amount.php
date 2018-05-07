<?php
$loanPct = 0.9;
$propValue = 500000;
$periodYear = 30;
$interest = 4.65;

function calcMonthlyPayment($loanPct, $propValue, $periodYear, $interest, $decimal=2) {
    $month = 12;

    $loanAmt = $propValue * $loanPct;
    $periodMonth = $periodYear * $month;
    $interestMth = ($interest / 100 / $month);
    $interestMthPlusOne = 1 + $interestMth;
    $powInterestMonth = pow($interestMthPlusOne, $periodMonth);
    $interestCalc = ($interestMth * $powInterestMonth) / ($powInterestMonth - 1);
  
    return number_format($loanAmt * $interestCalc, $decimal);
}

echo calcMonthlyPayment($loanPct, $propValue, $periodYear, $interest);

