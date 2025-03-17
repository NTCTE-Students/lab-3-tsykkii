<?php
$array = array(10, 20, 30, 40, 50);
$elementToFind = 30;

$index = array_search($elementToFind, $array);
if ($index !== false) {
    echo "Элемент {$elementToFind} найден на индексе: {$index}\n";
} else {
    echo "Элемент {$elementToFind} не найден в массиве.\n";
}
?>
