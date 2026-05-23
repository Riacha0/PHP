<html>
<head>
    <title>Array Operations</title>
    <link rel="stylesheet" href="Fa3_Act2.css">
</head>
<body>

<h2> Array Operations</h2>

<?php
// create array
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// display array list
echo "<p><b>Array list:</b> " . implode(", ", $numbers) . "</p>";

// initialize variables
$sum = 0;
$diff = $numbers[0];
$product = 1;
$quotient = $numbers[0];

// loop through array
foreach($numbers as $num){
    $sum += $num;
    $product *= $num;
}

// subtraction and division
for($i = 1; $i < count($numbers); $i++){
    $diff -= $numbers[$i];
    $quotient /= $numbers[$i];
}

// display results
echo "<table>";
echo "<tr><th>Operation</th><th>Result</th></tr>";
echo "<tr><td>Addition</td><td>$sum</td></tr>";
echo "<tr><td>Subtraction</td><td>$diff</td></tr>";
echo "<tr><td>Multiplication</td><td>$product</td></tr>";
echo "<tr><td>Division</td><td>$quotient</td></tr>";
echo "</table>";
?>

</body>
</html>
