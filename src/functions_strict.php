<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;



function calculateHomeWorkSum(int $a, float $b, string $c): int
{
    return $a + $b + $c;

    function callStrictTypeCalculation() {
        $this -> calculateHomeWorkSum();
    }
}



