<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SA3 Activity A - Login(Setcookie)</title>

    <link rel="stylesheet" href="SA3A_Style.css">

</head>

<body>

    <div class="container">

        <h2>Login Form</h2>

        <form action="" method="POST">

            <label>Username</label>
            <input
                type="text"
                name="username"
                value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"
                required>

            <label>Password</label>
            <input
                type="password"
                name="password"
                value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"
                required>

            <div class="remember">

            <input type="checkbox" name="remember">

            <span>Remember Me</span>

</div>

            <input type="submit" name="login" value="Submit">

        </form>

    </div>

</body>

</html>

<?php

session_start();

if(isset($_SESSION['username'])){

    header("Location: SA3A_Home.php");
    exit();

}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $correctUsername = "admin";
    $correctPassword = "12345";

    if(isset($_POST['remember'])){

        setcookie("username", $username, time() + 3600);
        setcookie("password", $password, time() + 3600);

    }
    else{

        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);

    }

    if($username == $correctUsername && $password == $correctPassword){

        $_SESSION['username'] = $username;

        header("Location: SA3A_Home.php");
        exit();

    }
    else{

        echo "<script>

                alert('Invalid Username or Password.');

              </script>";

    }

}

?>