<?php

$day = mt_rand(1, 20);
switch ($day) {
    case 7:
        echo 'Это выходной день';
        break;
    case 6:
        echo 'Это выходной день';
        break;
    case 5:
        echo 'Это рабочий день';
        break;
    case 4:
        echo 'Это рабочий день';
        break;
    case 3:
        echo 'Это рабочий день';
        break;
    case 2:
        echo 'Это рабочий день';
        break;
    case 1:
        echo 'Это рабочий день';
        break;
    default:
        echo 'Неизвестный день';
        break;
}
