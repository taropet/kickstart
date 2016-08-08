<?php header("Content-Type: text/html; charset=utf-8"); ?>
<meta http-equiv="Content-Type" content ="text/html; charset=utf-8"/>
<?php

require 'Dog.php';
require 'Cat.php';
require 'Fish.php';

$fido = new Dog('Фидо');
echo 'Собаку зовут: ' . $fido->name . '<br>';
echo 'Собака говорит: ' . $fido->speak() . '<br>';
echo 'Собака делает: ' . $fido->plays() . '<br>';

$mittens = new Cat('Миттен');
echo 'Кошку зовут: ' . $mittens->name . '<br>';
echo 'Кошка говорит: ' . $mittens->speak() . '<br>';
echo 'Кошка делает: ' . $mittens->plays() . '<br>';

$bubles = new Fish('Бабл');
echo 'Рыбку зовут: ' . $bubles->name . '<br>';
echo 'Рыбка говорит: ' . $bubles->speak() . '<br>';