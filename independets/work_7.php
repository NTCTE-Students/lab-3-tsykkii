<?php
$string = "Я сегодня буду кушать вкусна ваще";
$array = explode(" ", $string);

echo "Массив слов: " . implode(", ", $array) . "\n";
?>
