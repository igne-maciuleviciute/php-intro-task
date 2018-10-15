<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function calculateHomeWorkSum(int ...$numbers): int
{
    $sum = 0;
    foreach ($numbers as $numb) {
        $sum += $numb;
    }
    return $sum;
}

function callCalculateHomeWorkSum(...$numbers)
{
    return calculateHomeWorkSum(...$numbers);
}


