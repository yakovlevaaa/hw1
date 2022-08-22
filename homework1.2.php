<?php

const TOTAL = 80;
const MARKER = 23;
const PENCIL = 40;
$paints = TOTAL-(MARKER+PENCIL);

echo 'Дано:<br>Всего на выставке ' . TOTAL . ' рисунков.<br>',
    'Фломастерами нарисовано ' . MARKER . ',<br>',
    'Карандашами - ' . PENCIL . ',<br>',
'Красками - x.<br><br>',
'Решение:<br>',
    'x = ' . TOTAL . ' - ' . '( ' . MARKER . ' + ' . PENCIL . ' );<br>',
"x = $paints. <br><br>",
"Ответ: красками нарисовано $paints рисунков.";


