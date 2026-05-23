<!DOCTYPE html>
<html>
<head>
    <title>Fruits</title>
    <link rel="stylesheet" href="Tsa2_Act1.css">
</head>
<body>

<h2>My Fruits</h2>

<table>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

<?php
// ARRAY of fruits
$fruits = [
    ["Apple", "Color Red", "Apples are rich in fiber.", "images/apple.jpg"],
    ["Banana", "Color Yellow", "Bananas give energy.", "images/banana.jpg"],
    ["Cherry", "Small and Red", "Cherries contain antioxidants.", "images/cherry.jpg"],
    ["Grape", "Small and Round", "Grapes are used for wine.", "images/grape.jpg"],
    ["Mango", "Sweet Fruit", "Mango is the king of fruits.", "images/mango.jpg"],
    ["Orange", "Citrus Fruit", "Oranges are rich in Vitamin C.", "images/orange.jpg"],
    ["Papaya", "Orange Flesh", "Papaya helps digestion.", "images/papaya.jpg"],
    ["Pineapple", "Tropical Fruit", "Pineapples have enzymes.", "images/pineapple.jpg"],
    ["Strawberry", "Sweet Red", "Strawberries are healthy.", "images/strawberry.jpg"],
    ["Watermelon", "Juicy Fruit", "Watermelons contain lots of water.", "images/watermelon.jpg"]
];

// LOOP
for ($i = 0; $i < count($fruits); $i++) {
    echo "<tr>";
    echo "<td><img src='" . $fruits[$i][3] . "'></td>";
    echo "<td>" . $fruits[$i][0] . "</td>";
    echo "<td>" . $fruits[$i][1] . "</td>";
    echo "<td>" . $fruits[$i][2] . "</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
``