<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SA3 Activity B - Registration</title>

    <link rel="stylesheet" href="SA3B_Style.css">

</head>

<body>

    <div class="container">

        <h2>My Personal Information</h2>

        <form action="" method="POST">

            <label>First Name</label>
            <input type="text" name="firstname" required>

            <label>Middle Name</label>
            <input type="text" name="middlename" required>

            <label>Last Name</label>
            <input type="text" name="lastname" required>

            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirmpassword" required>

            <label>Birthday</label>
            <input type="date" name="birthday" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Contact Number</label>
            <input type="text" name="contact" required>

            <input type="submit" name="register" value="Register">

        </form>

        <br>

        <p>
            Already have an account?
            <a href="SA3B_Login.php">Login Here</a>
        </p>

    </div>

</body>

</html>

<?php

include("SA3B_DBConnection.php");

if (isset($_POST['register'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if ($password != $confirmpassword) {

        echo "<script>
                alert('Password and Confirm Password are not the same.');
              </script>";

    } else {

        $sql = "INSERT INTO MyUsers
        (firstname, middlename, lastname, username, password, birthday, email, contact)
        VALUES
        ('$firstname',
        '$middlename',
        '$lastname',
        '$username',
        '$password',
        '$birthday',
        '$email',
        '$contact')";

        $result = mysqli_query($conn, $sql);

        if ($result) {

            echo "<script>
                    alert('Registration Successful!');
                    window.location.href='SA3B_Login.php';
                  </script>";

        } else {

            echo "<script>
                    alert('Registration Failed!');
                  </script>";

            echo mysqli_error($conn);

        }

    }

}

?>