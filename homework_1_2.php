<?php

const DRAWINGS_ALL = 80;
const DRAWINGS_MARKERS = 23;
const DRAWINGS_PENCILS = 40;

$paints = DRAWINGS_ALL - DRAWINGS_MARKERS - DRAWINGS_PENCILS;
echo 'Красками выполнено ' . $paints . ' рисунков.';
