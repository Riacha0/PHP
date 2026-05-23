<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
    <link rel="stylesheet" href="Fa3_Act3.css">
</head>
<body>

<h2>Using User Defined Function</h2>

<?php
function myFunction($a, $b, $c) {
    $sum = $a + $b + $c;
    $diff = $a - $b - $c;
    $prod = $a * $b * $c;
    $quot = $a / $b / $c;

    echo "<p><b>My Parameter values:</b> $a, $b, $c</p>";
    echo "<table>";
    echo "<tr><th>Operation</th><th>Result</th></tr>";
    echo "<tr><td>Addition</td><td>$sum</td></tr>";
    echo "<tr><td>Subtraction</td><td>$diff</td></tr>";
    echo "<tr><td>Multiplication</td><td>$prod</td></tr>";
    echo "<tr><td>Division</td><td>$quot</td></tr>";
    echo "</table>";
}

// call the function
myFunction(25, 13, 6);
?>

</body>
</html>
