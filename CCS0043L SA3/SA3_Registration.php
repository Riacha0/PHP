<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SA3 Registration Module</title>

    <link rel="stylesheet" href="SA3_Registration.css">
</head>

<body>

    <div class="container">

        <h2>My Personal Information</h2>

        <form action="" method="POST">

            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname"
                value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" required>

            <label for="middlename">Middle Name</label>
            <input type="text" id="middlename" name="middlename"
                value="<?php if(isset($_POST['middlename'])) echo $_POST['middlename']; ?>" required>

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname"
                value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username"
                value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" name="confirmpassword" required>

            <label for="birthday">Birthday</label>
            <input type="date" id="birthday" name="birthday"
                value="<?php if(isset($_POST['birthday'])) echo $_POST['birthday']; ?>" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required>

            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact"
                value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>" required>

            <input type="submit" name="submit" value="Submit">

        </form>

    </div>

</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    if ($password == $confirmpassword) {

        $birthday = date("F d Y", strtotime($birthday));

        echo "<div class='result'>";

        echo "<h2>Registration Details</h2>";

        echo "<p><strong>Full Name:</strong> $firstname $middlename $lastname</p>";

        echo "<p><strong>Username:</strong> $username</p>";

        echo "<p><strong>Password:</strong> $password</p>";

        echo "<p><strong>Birthday:</strong> $birthday</p>";

        echo "<p><strong>Email:</strong> $email</p>";

        echo "<p><strong>Contact Number:</strong> $contact</p>";

        echo "</div>";

    } else {

        echo "<div class='error'>";
        echo "<h3>Password and Confirm Password are not the same.</h3>";
        echo "</div>";

    }

}

?>