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

<html>
<head>
    <title>My Favorite Colors</title>
     <link rel="stylesheet" href="item3Result.css">
    item3Result.css
</head>

<body>

<div class="container">
    <h2>ResultColors.php</h2>

    <?php
    foreach ($colors as $index => $color) {
        $color = htmlspecialchars($color);

        if ($color != "") {
            echo "<p>My Favorite Color " . ($index + 1) . ": $color</p>";
        }
    }
    ?>
</div>

</body>
</html>