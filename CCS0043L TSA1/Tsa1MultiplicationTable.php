<html>
<head>
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="Tsa1MultiplicationTableStyle.css">
</head>
<body>

<h2>Multiplication Table</h2>

<table>
<?php
for ($row = 0; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 0; $col <= 10; $col++) {
        $product = $row * $col;
        $class = ($product % 2 == 0) ? "yellow" : "red";
        echo "<td class='$class'>$product</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
