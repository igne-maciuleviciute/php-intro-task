<?php

require_once __DIR__ . '/vendor/autoload.php';

printf(\Nfq\Akademija\calculateHomeWorkSum(3, 2.2, '1')."\n\n");
printf(\Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1')."\n\n");
printf(\Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1')."\n\n");
printf(\Nfq\Akademija\Strict\callCalculateHomeWorkSum(3, 2.2, '1')."\n\n");
