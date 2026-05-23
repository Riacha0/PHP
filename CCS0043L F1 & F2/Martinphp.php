<?php
// name
$name = "Charles";
echo "$name's Payslip<br/>";  

// type check
$salary = "15000";
echo "Type: " . gettype($salary) . "<br/>";

// convert
settype($salary, "integer");
echo "Converted: $salary<br/>";
echo "Type: " . gettype($salary) . "<br/>";

// calc
$bonus = 2000;
$total = $salary + $bonus;
echo "Total Pay: $total<br/>";
?>
