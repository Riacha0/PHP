<?php

session_start();

if(!isset($_SESSION['username'])){

    header("Location: SA3B_Login.php");
    exit();

}

include("SA3B_DBConnection.php");

$username = $_SESSION['username'];

$sql = "SELECT * FROM MyUsers WHERE username='$username'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<html>

<head>

    <meta charset="UTF-8">

    <title>SA3 Activity B - Home</title>

    <link rel="stylesheet" href="SA3B_Style.css">

</head>

<body>

<div class="container">

    <h2>User Information</h2>

    <p><strong>Welcome:</strong> <?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></p>

    <p><strong>Birthday:</strong> <?php echo $row['birthday']; ?></p>

    <p><strong>Email:</strong> <?php echo $row['email']; ?></p>

    <p><strong>Contact Number:</strong> <?php echo $row['contact']; ?></p>

    <br>

    <h2>Reset Password</h2>

    <form action="SA3B_ResetPassword.php" method="POST">

        <label>Current Password</label>
        <input type="password" name="currentpassword" required>

        <label>New Password</label>
        <input type="password" name="newpassword" required>

        <label>Re-enter New Password</label>
        <input type="password" name="renewpassword" required>

        <input type="submit" name="reset" value="Reset Password">

    </form>

    <br>

    <a href="SA3B_Logout.php">Logout</a>

</div>

</body>

</html>