<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
</head>
<body>

<h2>Formula for Volume Shapes</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

<?php
// USER-DEFINED FUNCTIONS

function cube($s) {
    return $s * $s * $s;
}

function rectangularPrism($l, $w, $h) {
    return $l * $w * $h;
}

function cylinder($r, $h) {
    return 3.14 * $r * $r * $h;
}

function cone($r, $h) {
    return (1/3) * 3.14 * $r * $r * $h;
}

function sphere($r) {
    return (4/3) * 3.14 * $r * $r * $r;
}

// VALUES (simple numbers)
echo "<tr>";
echo "<td>s = 5</td>";
echo "<td>V = s³</td>";
echo "<td>" . cube(5) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>l=4, w=3, h=2</td>";
echo "<td>V = l×w×h</td>";
echo "<td>" . rectangularPrism(4,3,2) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>r=3, h=5</td>";
echo "<td>V = πr²h</td>";
echo "<td>" . cylinder(3,5) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>r=3, h=6</td>";
echo "<td>V = 1/3 πr²h</td>";
echo "<td>" . cone(3,6) . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>r=4</td>";
echo "<td>V = 4/3 πr³</td>";
echo "<td>" . sphere(4) . "</td>";
echo "</tr>";
?>

</table>

</body>
</html>