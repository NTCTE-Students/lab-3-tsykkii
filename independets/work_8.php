<?php
$numbers = array(5, 3, 8, 1, 2);

// Сортировка по возрастанию
sort($numbers);
echo "По возрастанию: " . implode(", ", $numbers) . "\n";

// Сортировка по убыванию
rsort($numbers);
echo "По убыванию: " . implode(", ", $numbers) . "\n";
?>
