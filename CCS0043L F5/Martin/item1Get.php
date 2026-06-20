<!DOCTYPE html>
<html>
<head>
    <title>Mini Sign Up</title>
    <!-- Bootstrap (optional, for styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Mini Sign-Up (GET)</h2>

<form method="GET">
    <div class="mb-3">
        <label>First Name</label>
        <input type="text" name="fname" class="form-control">
    </div>

    <div class="mb-3">
        <label>Middle Name</label>
        <input type="text" name="mname" class="form-control">
    </div>

    <div class="mb-3">
        <label>Last Name</label>
        <input type="text" name="lname" class="form-control">
    </div>

    <div class="mb-3">
        <label>Date of Birth</label>
        <input type="date" name="dob" class="form-control">
    </div>

    <div class="mb-3">
        <label>Address</label>
        <input type="text" name="address" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<hr>

<?php
if ($_GET) {
    // Use htmlspecialchars to prevent XSS attacks
    $fname = htmlspecialchars($_GET['fname'] ?? '');
    $mname = htmlspecialchars($_GET['mname'] ?? '');
    $lname = htmlspecialchars($_GET['lname'] ?? '');
    $dob = htmlspecialchars($_GET['dob'] ?? '');
    $address = htmlspecialchars($_GET['address'] ?? '');

    echo "<h4>Submitted Data (GET):</h4>";
    echo "First Name: $fname <br>";
    echo "Middle Name: $mname <br>";
    echo "Last Name: $lname <br>";
    echo "Date of Birth: $dob <br>";
    echo "Address: $address <br>";
}
?>

</body>
</html>
