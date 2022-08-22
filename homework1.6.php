<?php
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $value = $i * $j;
        if ($i % 2 === 0 && $j % 2 === 0) { // индексы строки и столбца чётные
            echo "<td> (" . $value . ") </td>";
        } elseif ($i % 2 != 0 && $j % 2 != 0) { // индексы строки и столбца нечётные
            echo "<td> [" . $value . "] </td>";
        } else {
            echo "<td> " . $value . " </td>"; // все остальные случаи
        }
    }
    echo "</tr>";
}
echo "</table>";
