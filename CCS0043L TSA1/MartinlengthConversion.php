<html>
<head>
<title>Metric Length Conversion</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f8ff; /* light blue background */
        text-align: center;
        margin-top: 50px;
    }
    h1 {
        color: #333;
    }
    .result {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 15px;
        width: 400px;
        margin: 0 auto;
        border-radius: 8px;
        box-shadow: 2px 2px 5px #aaa;
        text-align: left;
    }
</style>
</head>
<body>
<h1>Metric Length Conversion</h1>
<div class="result">
<?php
// value input
$meter = 6;

// metric conversions
$millimeter = $meter * 1000;
$centimeter = $meter * 100;
$decimeter = $meter * 10;
$kilometer = $meter / 1000;

// output
echo "$meter meter = $millimeter millimeters<br/>";
echo "$meter meter = $centimeter centimeters<br/>";
echo "$meter meter = $decimeter decimeters<br/>";
echo "$meter meter = $kilometer kilometers<br/>";
?>
</div>
</body>
</html>
