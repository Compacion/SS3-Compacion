<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // input daynis user
    $weight = floatval($_POST["weight"]);
    $lifestyle = strtoupper(trim($_POST["lifestyle"]));

    // dari kay mag calculate na
    if ($weight <= 0) {
        $message = "Please enter a valid weight.";
    } elseif ($lifestyle == 'A') {
        $calories = $weight * 15;
        $message = "You should consume approximately <strong>$calories</strong> calories per day for an active lifestyle.";
    } elseif ($lifestyle == 'S') {
        $calories = $weight * 13;
        $message = "You should consume approximately <strong>$calories</strong> calories per day for a sedentary lifestyle.";
    } else {
        $message = "Invalid input. Please enter 'A' for Active or 'S' for Sedentary.";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Recommendation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <div class="logo">CCC</div>
        <nav class="nav">
            <a href="home.html">Home</a>
            <a href="converter.html">Converter</a>
            <a href="me.html">About Me</a>
            <a href="cal.php"><button>Try</button></a>
        </nav>
    </header>


    
<div class="container">
    <h2>Calorie Calculator</h2>
    <form method="post">
        <label for="weight">Enter your weight (kg):</label>
        <input type="number" step="0.1" name="weight" id="weight" required>

        <label for="lifestyle">Select your lifestyle:</label>
        <select name="lifestyle" id="lifestyle" required>
            <option value="A">Active</option>
            <option value="S">Sedentary</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php if (isset($message)) { ?>
        <p class="result"><?php echo $message; ?></p>
    <?php } ?>
</div>

</body>
</html>