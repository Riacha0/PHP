<html>
<head>
<title>Two Digit Combo</title>
</head>
<body>
<?php
for ($x = 0; $x <= 99; $x++) {
    // format with leading zero
    $num = str_pad($x, 2, "0", STR_PAD_LEFT);
    echo $num;
    if ($x < 99) {
        echo ", ";
    }
}
?>
</body>
</html>
