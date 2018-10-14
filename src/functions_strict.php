<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;

function callStrictTypeCalculation(int $a, float $b, string $c)
{
    return $a + $b + $c;

    function calculateHomeWorkSum() {
        $this -> callStrictTypeCalculation();
    }
}


