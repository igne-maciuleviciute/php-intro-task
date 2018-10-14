<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;


function calculateHomeWorkSum(int $a, int $b, int $c): int
{
    return $a + $b + $c;
}

function callCalculateHomeWorkSum($a, $b,  $c)
{
    return calculateHomeWorkSum($a, $b, $c);
}


