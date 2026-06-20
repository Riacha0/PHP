<?php

if (!isset($_COOKIE["fname"])) {
    setcookie("fname", "Charles", time() + 10); // expires after 10 sec
}

if (!isset($_COOKIE["mname"])) {
    setcookie("mname", "Miguel", time() + 20); // expires after 20 sec
}

if (!isset($_COOKIE["lname"])) {
    setcookie("lname", "Martin", time() + 30); // expires after 30 sec
}
?>

<html>
<head>
    <title>Cookie Demo</title>
    <!-- auto refresh -->
    
    <meta http-equiv="refresh" content="2">

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

        h2 {
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>

<div class="box">
    <h2>Personal Information (Cookies)</h2>

    <?php
    // Display cookies only if they still exist
    if (isset($_COOKIE["fname"])) {
        echo "<p><strong>First Name:</strong> " . $_COOKIE["fname"] . "</p>";
    }

    if (isset($_COOKIE["mname"])) {
        echo "<p><strong>Middle Name:</strong> " . $_COOKIE["mname"] . "</p>";
    }

    if (isset($_COOKIE["lname"])) {
        echo "<p><strong>Last Name:</strong> " . $_COOKIE["lname"] . "</p>";
    }

    // If all cookies are gone
    if (!isset($_COOKIE["fname"]) && !isset($_COOKIE["mname"]) && !isset($_COOKIE["lname"])) {
        echo "<p><strong>No information left (All cookies expired)</strong></p>";
    }
    ?>
</div>

</body>
</html>