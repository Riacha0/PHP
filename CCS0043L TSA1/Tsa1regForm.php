<html>
<head>
    <title>Martin Registration Form</title>
    <link rel="stylesheet" href="Tsa1regFormStyle.css">
</head>
<body>

<h2>Personal Profile</h2>
<form method="post">
    <label>First Name:</label>
    <input type="text" name="firstname" value="Charles Miguel"><br><br>

    <label>Last Name:</label>
    <input type="text" name="lastname" value="Martin"><br><br>

    <label>Age:</label>
    <input type="number" name="age" value="20"><br><br>

    <label>Address:</label>
    <input type="text" name="address" value="Sta. Mesa, Manila"><br><br>

    <label>Section:</label>
    <input type="text" name="section" value="TC28/TW25"><br><br>

    <h2>Educational Attainment</h2>
    <label>Elementary:</label>
    <input type="text" name="elementary" value="Antonio A. Maceda Elementary School"><br><br>

    <label>Junior High School:</label>
    <input type="text" name="jhs" value="University of the East Manila"><br><br>

    <label>Senior High School:</label>
    <input type="text" name="shs" value="University of the East Manila"><br><br>

    <label>College:</label>
    <input type="text" name="college" value="FEU Institute of Technology"><br><br>

    <input type="submit" value="Register">
</form>

<?php
if ($_POST) {
    echo "<div class='output'>";
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Full Name:</strong> {$_POST['firstname']} {$_POST['lastname']}</p>";
    echo "<p><strong>Age:</strong> {$_POST['age']}</p>";
    echo "<p><strong>Address:</strong> {$_POST['address']}</p>";
    echo "<p><strong>Section:</strong> {$_POST['section']}</p>";

    echo "<h3>Educational Attainment</h3>";
    echo "<p><strong>Elementary:</strong> {$_POST['elementary']}</p>";
    echo "<p><strong>Junior High School:</strong> {$_POST['jhs']}</p>";
    echo "<p><strong>Senior High School:</strong> {$_POST['shs']}</p>";
    echo "<p><strong>College:</strong> {$_POST['college']}</p>";
    echo "</div>";
}
?>

</body>
</html>
