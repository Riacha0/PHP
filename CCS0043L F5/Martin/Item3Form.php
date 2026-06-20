<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #74b9ff, #81ecec);
        }

        .container {
            width: 400px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #00b894;
            color: white;
            border: none;
            border-radius: 6px;
        }

        button:hover {
            background: #019875;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Enter Your 5 Favorite Colors</h2>

    ResultColors.php
        <label>Color 1</label>
        <input type="text" name="c1" placeholder="e.g. red or #ff0000">

        <label>Color 2</label>
        <input type="text" name="c2">

        <label>Color 3</label>
        <input type="text" name="c3">

        <label>Color 4</label>
        <input type="text" name="c4">

        <label>Color 5</label>
        <input type="text" name="c5">

        <button type="submit">Submit Colors</button>
    </form>
</div>

</body>
</html>