<!DOCTYPE html>
<html>
<head>
    <title>Mini Sign-Up (POST)</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h2>Mini Sign-Up</h2>

<form method="POST">
    <div class="mb-3">
        <label>First Name</label>
        <input type="text" name="fname" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Middle Name</label>
        <input type="text" name="mname" class="form-control">
    </div>

    <div class="mb-3">
        <label>Last Name</label>
        <input type="text" name="lname" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Date of Birth</label>
        <input type="date" name="dob" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Address</label>
        <input type="text" name="address" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fname = htmlspecialchars($_POST["fname"] ?? "");
    $mname = htmlspecialchars($_POST["mname"] ?? "");
    $lname = htmlspecialchars($_POST["lname"] ?? "");
    $dob = htmlspecialchars($_POST["dob"] ?? "");
    $address = htmlspecialchars($_POST["address"] ?? "");

    echo "<h4>Submitted Data:</h4>";
    echo "First Name: $fname <br>";
    echo "Middle Name: $mname <br>";
    echo "Last Name: $lname <br>";
    echo "Date of Birth: $dob <br>";
    echo "Address: $address <br>";
}
?>

</body>
</html>