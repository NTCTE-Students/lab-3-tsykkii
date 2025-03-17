<?php
$arrayWithDuplicates = array(1, 2, 2, 3, 4, 4, 5);
$arrayWithoutDuplicates = array_unique($arrayWithDuplicates);

echo "Массив без дубликатов: " . implode(", ", $arrayWithoutDuplicates) . "\n";
?>
