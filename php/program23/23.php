<?php
$students=["Alice","Bob","Charlie","Diana","Eve"];

echo "orginal array:<br>";
print_r($students);
echo "<br><br>";
asort($students);
echo "Array Sorted in Ascending Oder:<br>";
print_r($students);
echo "<br><br>";

arsort($students);
echo "Array Sorted in desending order:<br>";
print_r($students);
?>