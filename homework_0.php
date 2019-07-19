<?php

require('src/functions.php');

const TEST_CONSTANTA = 1;
$userName = 'Igor';

if (TEST_CONSTANTA === 1) {
    $helloString = showSayHello($userName);
    echo $helloString;
}
