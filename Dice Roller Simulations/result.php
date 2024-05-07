<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Result</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin-bottom: 5px;
            font-size: 16px;
            color: #555;
        }

        .icon {
            font-size: 24px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dice Roll Result</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_dice = $_POST["num_dice"];
            $dice_type = $_POST["dice_type"];

            echo "<p><i class='fas fa-dice-d6 icon'></i> Number of Dice: $num_dice</p>";
            echo "<p><i class='fas fa-dice icon'></i> Type of Dice: d$dice_type</p>";

            $total = 0;
            $rolls = array();
            for ($i = 0; $i < $num_dice; $i++) {
                $roll = rand(1, $dice_type);
                $rolls[] = $roll;
                $total += $roll;
            }

            echo "<p><i class='fas fa-dice icon'></i> Total Count: $total</p>";
            echo "<p><i class='fas fa-dice icon'></i> Individual Rolls:</p>";
            echo "<ul>";
            foreach ($rolls as $roll) {
                echo "<li><i class='fas fa-dice icon'></i> $roll</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No data submitted</p>";
        }
        ?>
    </div>
</body>
</html>
