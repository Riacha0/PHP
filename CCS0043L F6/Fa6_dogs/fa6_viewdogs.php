<?php
$conn = new mysqli("localhost", "root", "", "dogs");

if ($conn->connect_error) {
    die("Database connection failed");
}

$result = $conn->query("SELECT * FROM dogs");
?>

<html>
<head>
    <title>Dog Records</title>
     <link rel="stylesheet" href="fa6_dogs.css">
</head>

<body>

<div class="container">
    <h2>Dog Records</h2>

    <table border="1" width="100%">
        <tr>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Address</th>
            <th>Color</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['breed']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['color']."</td>";
            echo "<td>".$row['height']."</td>";
            echo "<td>".$row['weight']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

</body>
</html>