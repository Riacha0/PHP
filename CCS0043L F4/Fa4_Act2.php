<html>
<head>
    <title>String Functions Activity</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>List of Names</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of "a"</th>
        <th>Reverse Name</th>
    </tr>

<?php

$names = [
    "naruto",
    "sasuke",
    "tanjiro",
    "kaneki",
    "shanks",
    "akame",
    "ayato",
    "inari",
    "takumi",
    "karin",
    "asahi",
    "yamato",
    "ganta",
    "armin",
    "kanna",
    "arata",
    "zamasu",
    "hanji",
    "akari",
    "shoma"
];
foreach ($names as $name) {

    $length = strlen($name);

    $upper = ucfirst($name);

    $replace = str_ireplace(['a','e','i','o','u'], "@", $name);

    $pos = stripos($name, 'a');
    if ($pos !== false) {
        $pos = $pos + 1;
    } else {
        $pos = "Character no letter A on name";
    }

    $reverse = strrev($name);

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$length</td>";
    echo "<td>$upper</td>";
    echo "<td>$replace</td>";
    echo "<td>$pos</td>";
    echo "<td>$reverse</td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>