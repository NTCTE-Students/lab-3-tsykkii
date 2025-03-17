<?php
$twoDimensionalArray = array(
    array("Имя", "Возраст", "Город"),
    array("Карина", 18, "Нижний Тагил"),
    array("Егор", 27, "Нижний Тагил"),
);

echo "<table border='1'>";
foreach ($twoDimensionalArray as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>{$cell}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
