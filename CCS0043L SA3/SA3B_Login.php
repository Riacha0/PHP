<html>

<head>

    <meta charset="UTF-8">

    <title>SA3 Activity B - Login</title>

    <link rel="stylesheet" href="SA3B_Style.css">

</head>

<body>

<div class="container">

    <h2>Login Form</h2>

    <form action="" method="POST">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" value="Login">

    </form>

    <br>

    <p>

        Don't have an account?

        <a href="SA3B_Register.php">Register Here</a>

    </p>

</div>

</body>

</html>

<?php

session_start();

include("SA3B_DBConnection.php");

if(isset($_SESSION['username'])){

    echo "<script>

            window.location='SA3B_Home.php';

          </script>";

}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM MyUsers WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){

        $_SESSION['username'] = $username;

        echo "<script>

                alert('Login Successful!');

                window.location='SA3B_Home.php';

              </script>";

    }
    else{

        echo "<script>

                alert('Invalid Username or Password.');

              </script>";

    }

}

?>