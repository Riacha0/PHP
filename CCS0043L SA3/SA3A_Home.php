<?php

session_start();

if(!isset($_SESSION['username'])){

    header("Location: SA3A_Login.php");
    exit();

}

?>

<html>

<head>

    <meta charset="UTF-8">

    <title>SA3 Activity A - Home</title>

    <link rel="stylesheet" href="SA3A_Style.css">

</head>

<body>

    <div class="container">

        <h2>Home Page</h2>

        <p><strong>Welcome,</strong> <?php echo $_SESSION['username']; ?></p>

        <br>

        <a href="SA3A_Logout.php">Logout</a>

    </div>

</body>

</html>