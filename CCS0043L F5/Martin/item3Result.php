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
    <title>Result Colors</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f7fa;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            text-align: center;
        }

        .color-box {
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            color: white;
            font-weight: bold;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>My Favorite Colors</h2>

    <?php
    for ($i = 0; $i < count($colors); $i++) {
        $color = htmlspecialchars($colors[$i]);

        if ($color != "") {
            echo "<div class='color-box' style='background:$color'>";
            echo "My Favorite Color " . ($i + 1) . ": $color";
            echo "</div>";
        }
    }
    ?>
</div>

</body>
</html>