<?php
// Set cookies (only once)
if (!isset($_COOKIE["fname"])) {
    setcookie("fname", "Charles", time() + 10);
}
if (!isset($_COOKIE["mname"])) {
    setcookie("mname", "Miguel", time() + 20);
}
if (!isset($_COOKIE["lname"])) {
    setcookie("lname", "Martin", time() + 30);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Demo</title>

    <style>
        body {
            font-family: Arial;
            background: #f5f7fa;
            text-align: center;
            margin-top: 50px;
        }

        .box {
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Personal Information</h2>

    <?php
    if (isset($_COOKIE["fname"])) {
        echo "<p>First Name: " . $_COOKIE["fname"] . "</p>";
    }

    if (isset($_COOKIE["mname"])) {
        echo "<p>Middle Name: " . $_COOKIE["mname"] . "</p>";
    }

    if (isset($_COOKIE["lname"])) {
        echo "<p>Last Name: " . $_COOKIE["lname"] . "</p>";
    }

    if (!isset($_COOKIE["fname"]) && !isset($_COOKIE["mname"]) && !isset($_COOKIE["lname"])) {
        echo "<p><strong>No information left</strong></p>";
    }
    ?>
</div>

</body>
</html>