<?php
$age = mt_rand(0, 122); // Жанна Луиза Кальман

var_dump($age);

if ($age >= 18 && $age <= 65) {
    echo 'Вам ещё работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} elseif ($age >=1 && $age <= 17) {
    echo 'Вам ещё рано работать';
} else {
    echo 'Неизвестный возраст';
}
