<?php


$wage = (10);
$regular_hours = (40);
$overtime = (2);


$overtime = (2);
$pay += ($overtime * $wage * 1.5);
$pay += ($regular_hours + $overtime) * $wage;


echo "hours worked: " . $regular_hours . "<br>";
echo "pay rate: $" . number_format($wage, 2) . "<br>";
echo "overtime hours: " . $overtime . "<br>";
echo "paycheck is: $" . number_format($pay, 2) . "<br>";



?>

