<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Таблица умножения</title>
</head>
<body>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
            for ($k = 1; $k <= 10; $k++) {
                if (($i % 2 == 0) && ($k % 2 == 0)) {
                    $value = '(' . $i * $k . ')';
                } elseif (($i % 2 != 0) && ($k % 2 != 0)) {
                    $value = '[' . $i * $k . ']';
                } else {
                    $value = $i * $k;
                }

                echo '<td>' . $value . '</td>';
            }
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>