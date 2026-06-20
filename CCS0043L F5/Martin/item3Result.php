<?php
session_start();

$_SESSION['colors'] = [
    $_POST['c1'] ?? '',
    $_POST['c2'] ?? '',
    $_POST['c3'] ?? '',
    $_POST['c4'] ?? '',
    $_POST['c5'] ?? ''
];

$colors = $_SESSION['colors'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>ResultColors.php</title>
    <style>
        body {
            font-family: serif;
            font-size: 20px;
            margin: 50px;
        }
    </style>
</head>

<body>

<h2>ResultColors.php</h2>

<?php
foreach ($colors as $index => $color) {
    $color = htmlspecialchars($color);

    if ($color != "") {
        echo "My Favorite Color " . ($index + 1) . ": $color <br><br>";
    }
}
?>

</body>
</html>