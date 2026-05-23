<html>
<head>
    <title>Activity 1</title>
    <link rel="stylesheet" href="Fa3_Act1.css">
</head>
<body>

<h2>One Piece</h2>

<?php
// create array
$characters = array(
    array("name"=>"Luffy","image"=>"luffy.jpg","age"=>19,"birthday"=>"May 5","contact"=>"09123456789"),
    array("name"=>"Zoro","image"=>"zoro.jpg","age"=>21,"birthday"=>"Nov 11","contact"=>"09234567890"),
    array("name"=>"Nami","image"=>"nami.jpg","age"=>20,"birthday"=>"Jul 3","contact"=>"09345678901"),
    array("name"=>"Usopp","image"=>"usopp.jpg","age"=>19,"birthday"=>"Apr 1","contact"=>"09456789012"),
    array("name"=>"Sanji","image"=>"sanji.jpg","age"=>21,"birthday"=>"Mar 2","contact"=>"09567890123"),
    array("name"=>"Chopper","image"=>"chopper.jpg","age"=>17,"birthday"=>"Dec 24","contact"=>"09678901234"),
    array("name"=>"Nico Robin","image"=>"robin.jpg","age"=>30,"birthday"=>"Feb 6","contact"=>"09789012345"),
    array("name"=>"Franky","image"=>"franky.jpg","age"=>36,"birthday"=>"Mar 9","contact"=>"09890123456"),
    array("name"=>"Brook","image"=>"brook.jpg","age"=>90,"birthday"=>"Apr 3","contact"=>"09901234567"),
    array("name"=>"Jinbe","image"=>"jinbe.jpg","age"=>46,"birthday"=>"Apr 2","contact"=>"09012345678")
);

// sort array by name
usort($characters, function($a, $b){
    return strcmp($a["name"], $b["name"]);
});

// display table
echo "<table>";
echo "<tr><th>No.</th><th>Name</th><th>Image</th><th>Age</th><th>Birthday</th><th>Contact</th></tr>";

$no = 1;
foreach($characters as $char){
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$char["name"]."</td>";
    echo "<td><img src='".$char["image"]."' alt='".$char["name"]."'></td>";
    echo "<td>".$char["age"]."</td>";
    echo "<td>".$char["birthday"]."</td>";
    echo "<td>".$char["contact"]."</td>";
    echo "</tr>";
    $no++;
}

echo "</table>";
?>

</body>
</html>
