<html>
  <head>
    <title>PHP Web Forms Activities</title>
    <link rel="stylesheet" href="style.css">
    <style>
        span {
            font-size: 100px;
            color: #fff;
            font-family: 'Arial';
            text-transform: uppercase;
            display: inline-block;
            transform: rotateY(0deg);
            transition: 0.5s;
            animation: bounce 1s ease infinite alternate;
            position: relative; 
        }
        h1 span:nth-child(2) {
            animation-delay: 0.1s;
        }
        h1 span:nth-child(3) {
            animation-delay: 0.2s;
        }
        h1 span:nth-child(4) {
            animation-delay: 0.3s;
        }
        h1 span:nth-child(5) {
            animation-delay: 0.4s;
        }
        h1 span:nth-child(6) {
            animation-delay: 0.5s;
        }
        h1 span:nth-child(7) {
            animation-delay: 0.6s;
        }
        h1 span:nth-child(8) {
            animation-delay: 0.7s;
        }
        h1 span:nth-child(9) {
            animation-delay: 0.8s;
        }
        h1 span:nth-child(10) {
            animation-delay: 0.9s;
        }
        h1 span:nth-child(11) {
            animation-delay: 1s;
        }

        @keyframes bounce {
            100% {
                top: -20px; 
                text-shadow: 0 1px 0 #ccc,
                             0 2px 0 #ccc,
                             0 3px 0 #ccc,
                             0 4px 0 #ccc,
                             0 5px 0 #ccc,
                             0 6px 0 #ccc,
                             0 7px 0 #ccc,
                             0 8px 0 #ccc;
                             0 9px 0 #ccc;
                             0 10px 0 #ccc;
                             0 11px 0 #ccc;
            }
        }
    </style>
  </head>
  <body>
    <a href="PT6_PROBLEMA_COMPACION_WEBFORMS.php"><h1 class="logo">CCC</h1></a>
    <div class="container">
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $fourth = $_POST['fourth'];
    $average = ($first + $second + $third + $fourth) / 4;

    if ($average >= 90 && $average <= 100) {
    echo "<div class='result'><h2>";
    echo "Average Grade: <B>$average</B>";
    echo "<br>";
    echo "Description: OUTSTANDING!";
    echo "<br>";
    echo "Remarks: PASSED";
    echo "</h2></div>";
    echo "<br>";
    echo "<h1>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>G</span>
        <span>R</span>
        <span>A</span>
        <span>T</span>
        <span>S</span>
        <span>B</span>
        <span>R</span>
        <span>O</span>
    </h1>";
    }
    elseif ($average >= 85 && $average <= 89) {
    echo "<div class='result'><h2>";
    echo "Average Grade:<B>$average</B>";
    echo "<br>";
    echo "Description: VERY SATISFACTORY";
    echo "<br>";
    echo "Remarks: PASSED";
    echo "</h2></div>";
    echo "<br>";
    echo "<h1>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>G</span>
        <span>R</span>
        <span>A</span>
        <span>T</span>
        <span>S</span>
        <span>B</span>
        <span>R</span>
        <span>O</span>
    </h1>";
    }
    elseif ($average >= 80 && $average <= 84) {
    echo "<div class='result'><h2>";
    echo "Average Grade: <B>$average</B>";
    echo "<br>";
    echo "Description: SATISFACTORY";
    echo "<br>";
    echo "Remarks: PASSED";
    echo "</h2></div>";
    echo "<br>";
    echo "<h1>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>G</span>
        <span>R</span>
        <span>A</span>
        <span>T</span>
        <span>S</span>
        <span>B</span>
        <span>R</span>
        <span>O</span>
    </h1>";
    }
    elseif ($average >= 75 && $average <= 79) {
    echo "<div class='result'><h2>";
    echo "Average Grade: <B>$average</B>";
    echo "<br>";
    echo "Description: FAIRLY SATISFACTORY";
    echo "<br>";
    echo "Remarks: PASSED";
    echo "</h2></div>";
    echo "<br>";
    echo "<h1>
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>G</span>
        <span>R</span>
        <span>A</span>
        <span>T</span>
        <span>S</span>
        <span>B</span>
        <span>R</span>
        <span>O</span>
    </h1>";
    }
    elseif ($average >= 0 && $average <= 74) {
    echo "<div class='result'><h2>";
    echo "Average Grade: <B>$average</B>";
    echo "<br>";
    echo "Description: DID NOT MEET EXPECTATIONS";
    echo "<br>";
    echo "Remarks: FAILED";
    echo "</h2></div>";
    echo "<br>";
    echo "<h1>
        <span>N</span>
        <span>U</span>
        <span>Y</span>
        <span>A</span>
        <span>N</span>
        <span>B</span>
        <span>R</span>
        <span>O</span>
        <span>🤮</span>
        <span>🤮</span>
        <span>🤮</span>
    </h1>";
    }
  } 
?>
    </div>
    </body>
</html>