<html>
  <head>
    <title>PHP Web Forms Activities</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <a href="PT6_PROBLEMA_COMPACION_WEBFORMS.php"><h1 class="logo">CCC</h1></a>
    <div class="container">
    <h1>GRADE CALCULATOR</h1>
    <form action="calculate.php" method="post">
      <label for="first">Enter 1st Quarter Grade: </label>
      <input type="number" id="first" name="first" required> <br>
      <label for="second">Enter 2nd Quarter Grade: </label>
      <input type="number" id="second" name="second" required> <br>
      <label for="third">Enter 3rd Quarter Grade: </label>
      <input type="number" id="third" name="third" required><br>
      <label for="fourth">Enter 4th Quarter Grade: </label>
      <input type="number" id="fourth" name="fourth" required><br>
    
        <input type="submit" name="Calculate">
    </form> 
    
  </body>  
</html>