<?php


namespace Nfq\Akademija {
    function calculateHomeWorkSum($first, $second, $third)
    {
        return $first+$second+$third;
    }
}

namespace Nfq\Akademija\Not_Typed {
    function calculateHomeWorkSum($first, $second, $third): int
    {
        return $first+$second+$third;
    }
}

namespace Nfq\Akademija\Soft {
    function calculateHomeWorkSum($first, $second, $third): int
    {
        return $first+$second+$third;
    }
}

namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum($first, $second, $third): int
    {
        return $first+$second+$third;
    }
}