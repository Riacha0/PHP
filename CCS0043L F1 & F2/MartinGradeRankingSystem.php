<html>
<head>
<title>Grade Ranking</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        text-align: center;
        margin-top: 40px;
    }
    h1 {
        color: #444;
    }
    .card {
        background-color: #fff;
        border: 2px solid #4CAF50;
        width: 500px;
        margin: 0 auto;
        border-radius: 10px;
        box-shadow: 3px 3px 8px #aaa;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .details {
        text-align: left;
    }
    .details p {
        margin: 8px 0;
        font-size: 16px;
    }
    .picture {
        border: 1px dashed #999;
        width: 120px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    .picture img {
        width: 100%;
        height: auto;
    }
</style>
</head>
<body>
<h1>Grade Ranking Program</h1>
<div class="card">
    <div class="details">
        <?php
        // student info
        $name = "Charles Miguel T. Martin";
        $grade = 83;

        // determine rank
        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
        } elseif ($grade >= 90 && $grade <= 92) {
            $rank = "A-";
        } elseif ($grade >= 87 && $grade <= 89) {
            $rank = "B+";
        } elseif ($grade >= 83 && $grade <= 86) {
            $rank = "B";
        } elseif ($grade >= 80 && $grade <= 82) {
            $rank = "B-";
        } elseif ($grade >= 77 && $grade <= 79) {
            $rank = "C+";
        } elseif ($grade >= 73 && $grade <= 76) {
            $rank = "C";
        } elseif ($grade >= 70 && $grade <= 72) {
            $rank = "C-";
        } elseif ($grade >= 67 && $grade <= 69) {
            $rank = "D+";
        } elseif ($grade >= 63 && $grade <= 66) {
            $rank = "D";
        } elseif ($grade >= 60 && $grade <= 62) {
            $rank = "D-";
        } else {
            $rank = "F";
        }

        // output
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Grade:</strong> $grade</p>";
        echo "<p><strong>Rank:</strong> $rank</p>";
        ?>
    </div>
    <div class="picture">
        <!-- Replace 'student.jpg' with your actual image file -->
        <img src="migs.jpg" alt="Student Picture">
    </div>
</div>
</body>
</html>
