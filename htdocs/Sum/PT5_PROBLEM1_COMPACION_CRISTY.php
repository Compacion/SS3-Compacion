<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Reciprocals</title>
    <link rel="stylesheet" href="stylesS.css">
</head>
<body>
    <header>
        <div class="logo">CCC</div>
        <nav class="nav">
            <a href="home.html" class="ola">Home</a>
            <a href="me.html" class="ola">About Me</a>
            <a href="PT5_PROBLEM1_COMPACION_CRISTY.php"><button>Try</button></a>
        </nav>
    </header>
    
    <div class="container">
    <h1>Sum of Reciprocals</h1>

    <!-- Form nis input N ni user -->
    <form method="post">
        <label for="N">Enter the value of N: </label>
        <input type="number" id="N" name="N" min="1" required>
        <input type="submit" value="Calculate">
    </form> 
        
    <?php
    // Checking if ang N ni user is correct
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST['N'];  // Get N from user input

        // Initialize sum variable
        $sum = 0.0;

        // Loop and calculate na here ^^
        for ($i = 1; $i <= $N; $i++) {
            $sum += 1.0 / $i;
        }

        // Result 
        echo "<div class='result'><h2>The result of 1.0/$N is: $sum</h2></div>";
    }
    ?>
</body>
</html>