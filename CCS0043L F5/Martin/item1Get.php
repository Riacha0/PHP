<!DOCTYPE html>
<html>
<head>
    <title>Mini Sign Up(GET)</title>
    <link rel="stylesheet" href="item1Get.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Mini Sign up</h2>

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
    
    $fname = htmlspecialchars($_GET['fname'] ?? '');
    $mname = htmlspecialchars($_GET['mname'] ?? '');
    $lname = htmlspecialchars($_GET['lname'] ?? '');
    $dob = htmlspecialchars($_GET['dob'] ?? '');
    $address = htmlspecialchars($_GET['address'] ?? '');

    echo "<div class='result-box'>";
    echo "<h4>Submitted Data</h4>";
    echo "<p><strong>First Name:</strong> $fname</p>";
    echo "<p><strong>Middle Name:</strong> $mname</p>";
    echo "<p><strong>Last Name:</strong> $lname</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "</div>";
}
?>
</body>
</html>
