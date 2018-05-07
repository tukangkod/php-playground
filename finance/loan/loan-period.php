<?php

$loanPct = 0.9;
$propValue = 500000;
$periodYear = 30;
$interest = 4.65;
$monthlyPayment = 2000;

function calcPaymentDurationMonth($propValue, $loanPct, $interest, $monthlyPayment) {
    //formula:  −log(1−iA/P) / log(1+i)

    $loanAmt = $propValue * $loanPct;
    $monthlyInterest = $interest/1200;

    return (log(1-(($monthlyInterest * $loanAmt) / $monthlyPayment), 10) * -1) / log(1 + $monthlyInterest, 10);
}

function calcPaymentDurationYear($propValue, $loanPct, $interest, $monthlyPayment) {
    return calcPaymentDurationMonth($propValue, $loanPct, $interest, $monthlyPayment) / 12;
}

echo calcPaymentDurationYear($propValue, $loanPct, $interest, $monthlyPayment);
