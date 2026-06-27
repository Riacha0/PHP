<?php
$conn = new mysqli("localhost", "root", "", "dogs");

if ($conn->connect_error) {
    die("Database connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    if ($conn->query($sql)) {
        header("Location: fa6_viewdogs.php");
        exit();
    }
}
?>

<html>
<head>
    <title>Dog Registration Form</title>
    <link rel="stylesheet" href="fa6_dogs.css">
</head>

<body>

<div class="container">
    <h2>Dog Registration</h2>

    <!-- ✅ THIS WAS MISSING -->
    <form method="POST">

        <input type="text" name="name" placeholder="Dog Name">
        <input type="text" name="breed" placeholder="Breed">
        <input type="number" name="age" placeholder="Age">
        <input type="text" name="address" placeholder="Address">
        <input type="text" name="color" placeholder="Color">
        <input type="text" name="height" placeholder="Height">
        <input type="text" name="weight" placeholder="Weight">

        <button type="submit">Save Dog</button>

    </form>
</div>

</body>
</html>