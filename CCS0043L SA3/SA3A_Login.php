<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SA3 Activity A - Login</title>

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

                <label>Remember Me</label>

            </div>

            <input type="submit" name="login" value="Submit">

        </form>

    </div>

</body>

</html>
<?php

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {

        setcookie("username", $username, time() + 3600);
        setcookie("password", $password, time() + 3600);

        echo "<script>
                alert('Cookies have been saved!');
                window.location='SA3A_Login.php';
              </script>";

    } else {

        setcookie("username", "", time() - 3600);
        setcookie("password", "", time() - 3600);

        echo "<script>
                alert('Cookies were not saved.');
                window.location='SA3A_Login.php';
              </script>";

    }

}

?>