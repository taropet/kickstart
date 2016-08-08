<?php header("Content-Type: text/html; charset=utf-8"); ?>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
<?php

require 'Dog.php';

$fido = new Dog('Фидо');
echo 'Собаку зовут: ' . $fido->name . '<br>';
echo 'Собака говорит: ' . $fido->speak() . '<br>';

$fifi = new Dog('Фифи');
echo 'Собаку зовут: ' . $fifi->name . '<br>';
echo 'Собака говорит: ' . $fifi->speak() . '<br>';