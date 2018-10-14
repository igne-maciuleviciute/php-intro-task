<?php


namespace Nfq\Akademija {
    function calculateHomeWorkSum($a, $b, $c)
    {
        return $a + $b + $c;
    }
}

namespace Nfq\Akademija\Not_Typed {
    function calculateHomeWorkSum($a, $b, $c): int
    {
        return $a + $b + $c;
    }
}

namespace Nfq\Akademija\Soft {
    function calculateHomeWorkSum(int $a, int $b, int $c): int
    {
        return $a + $b + $c;
    }
}

namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum(int $a, float $b, string $c): int
    {
        return $a + $b + $c;
    }
}