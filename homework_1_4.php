<?php

$day = mt_rand(1, 20);
switch ($day) {
    case 7:
    case 6:
        echo 'Это выходной день';
        break;
    case 5:
    case 4:
    case 3:
    case 2:
    case 1:
        echo 'Это рабочий день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}
