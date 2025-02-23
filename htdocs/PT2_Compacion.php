<!Doctype>
<html>
<head>
<meata http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Activity 2 - Expansion Project </title>
  <style type="text/css">
    table 
    body,td,th {
      font-family: Times,roman,sans-serif;;
      color: white;
      font-size: 12px;
      text-align: center;
    }
    
    body {
      background-image: url(hi.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      border: 2px solid #000000;
      width: 90%;
      margin: auto;
      margin-bottom: auto;
      margin-top: auto;
    }
    .style8 {color: gray}
    th {
      background-color:rgb(1, 25, 73);
    }
    h1 {
      text-shadow: 5px 5px 5px #0511fc;
    }
    h2 {
      text-shadow: 5px 5px 5px #fc050d;
    }
    td#hi {
      background-color:rgb(136, 5, 103);
    }
    td#he {
      background-color:rgb(80, 6, 114);
    }
    h6 {
      color: white;
      text-align: right;
      position:relative; left: -9%;
      text-shadow: 10px 10px 10px black;
    }
    td#she {
      color: white;
    }
   
      </style>
</head>
<body>
<br><br><br><br><br><br>
<center><h1 style="color:white"><b>Public Library Expansion Project</b></h1></center>
<br>
<center><h2 style="color:white"><b>Cost Estimates</b></h2></center>
<br>
<?php
$name = "Lumber";
$Lumber_cost = 150000;
$lumber=number_format($Lumber_cost,2);
$lumber= "$".$lumber;
$increase_10 = $Lumber_cost + $Lumber_cost * 0.10;
$increase_10=number_format($increase_10,2);
$increase_10= "$".$increase_10;
$increase_15 = $Lumber_cost + $Lumber_cost * 0.15;
$increase_15=number_format($increase_15,2);
$increase_15= "$".$increase_15;
$increase_20 = $Lumber_cost + $Lumber_cost * 0.20;
$increase_20=number_format($increase_20,2);
$increase_20= "$".$increase_20;
  
$name_2 = "Concrete";
$concrete_cost = 78000;
$concrete=number_format($concrete_cost,2);
$concrete= "$".$concrete;
$increase2_10 = $concrete_cost + $concrete_cost * 0.10;
$increase2_10=number_format($increase2_10,2);
$increase2_10= "$".$increase2_10;
$increase2_15 = $concrete_cost + $concrete_cost * 0.15;
$increase2_15=number_format($increase2_15,2);
$increase2_15= "$".$increase2_15;
$increase2_20 = $concrete_cost + $concrete_cost * 0.20;
$increase2_20=number_format($increase2_20,2);
$increase2_20= "$".$increase2_20;

$name_3 = "Drywall";
$drywall_cost = 69000;
$drywall=number_format($drywall_cost,2);
$drywall= "$".$drywall;
$increase3_10 = $drywall_cost + $drywall_cost * 0.10;
$increase3_10=number_format($increase3_10,2);
$increase3_10= "$".$increase3_10;
$increase3_15 = $drywall_cost + $drywall_cost * 0.15;
$increase3_15=number_format($increase3_15,2);
$increase3_15= "$".$increase3_15;
$increase3_20 = $drywall_cost + $drywall_cost * 0.20;
$increase3_20=number_format($increase3_20,2);
$increase3_20= "$".$increase3_20;

$name_4 = "Paint";
$paint_cost = 12000;
$paint=number_format($paint_cost,2);
$paint= "$".$paint;
$increase4_10 = $paint_cost + $paint_cost * 0.10;
$increase4_10=number_format($increase4_10,2);
$increase4_10= "$".$increase4_10;
$increase4_15 = $paint_cost + $paint_cost * 0.15;
$increase4_15=number_format($increase4_15,2);
$increase4_15= "$".$increase4_15;
$increase4_20 = $paint_cost + $paint_cost * 0.20;
$increase4_20=number_format($increase4_20,2);
$increase4_20= "$".$increase4_20;

$name_5 = "Miscellaneous";
$miscellaneous_cost = 20000;
$miscellaneous=number_format($miscellaneous_cost,2);
$miscellaneous= "$".$miscellaneous;
$increase5_10 = $miscellaneous_cost + $miscellaneous_cost * 0.10;
$increase5_10=number_format($increase5_10,2);
$increase5_10= "$".$increase5_10;
$increase5_15 = $miscellaneous_cost + $miscellaneous_cost * 0.15;
$increase5_15=number_format($increase5_15,2);
$increase5_15= "$".$increase5_15;
$increase5_20 = $miscellaneous_cost + $miscellaneous_cost * 0.20;
$increase5_20=number_format($increase5_20,2);
$increase5_20= "$".$increase5_20;
  
  $estimated_cost = $Lumber_cost + $concrete_cost + $drywall_cost + $paint_cost + $miscellaneous_cost;
  $estimated_cost=number_format($estimated_cost,2);
  $estimated_cost= "$".$estimated_cost;

$total = 165000 + 85800 + 75900 + 13200 + 22000;
  $total=number_format($total,2);
  $total= "$".$total;

  $total2= 172500 + 89700 + 79350 + 13800 + 23000;
  $total2=number_format($total2,2); 
  $total2= "$" .$total2;

  $total3= 180000 + 93600 + 82800 + 14400 + 24000;
  $total3=number_format($total3,2);
  $total3="$".$total3;

  $name6= "Cristy C. Compacion";

  
echo "<table width='82%' border='2' align='center' cellpadding='5' cellspacing='0'>"; 
echo "<tr>";
echo "<th>Expenditures</th>";
echo "<th>Estimated Cost</th>";
echo "<th>10% Increase</th>";
echo "<th>15% Increase</th>";
echo "<th>20% Increase</th>";
echo "</tr>";
echo "<tr>";
echo "<td id='hi'>$name</td>";
echo "<td id='hi'>$lumber</td>";
echo "<td id='hi'>$increase_10</td>";
echo "<td id='hi'>$increase_15</td>";
echo "<td id='hi'>$increase_20</td>";
echo "</tr>";
echo "<tr>";
echo "<td id='he'>$name_2</td>";
echo "<td id='he'>$concrete</td>";
echo "<td id='he'>$increase2_10</td>"; 
echo "<td id='he'>$increase2_15</td>";
echo "<td id='he'>$increase2_20</td>";
echo "</tr>";
echo "<tr>";
echo "<td id='hi'>$name_3</td>";
echo "<td id='hi'>$drywall</td>";
echo "<td id='hi'>$increase3_10</td>";
echo "<td id='hi'>$increase3_15</td>";
echo "<td id='hi'>$increase3_20</td>";
echo "</tr>";
echo "<tr>";
echo "<td id='he'>$name_4</td>";
echo "<td id='he'>$paint</td>";
echo "<td id='he'>$increase4_10</td>";
echo "<td id='he'>$increase4_15</td>";
echo "<td id='he'>$increase4_20</td>";
echo "</tr>";
echo "<tr>";
echo "<td id='hi'>$name_5</td>";
echo "<td id='hi'>$miscellaneous</td>";
echo "<td id='hi'>$increase5_10</td>";
echo "<td id='hi'>$increase5_15</td>";
echo "<td id='hi'>$increase5_20</td>";
echo "</tr>";
 
 echo "</table>";

  echo "<br>";
  echo "<table width='83%' border='0' align='center' cellpadding='5' cellspacing='0' >";
  echo "<tr>";
  echo "<td align='left' id='she'><b>Total Expenditures:</b></td>";
  echo "<td id='she'>$estimated_cost</td>";
  echo "<td id='she'>$total</td>";
  echo "<td id='she'>$total2</td>";
  echo "<td id='she'>$total3</td>";
echo "</table>";  
  echo "<br>";

  echo "<h6>Created by: $name6</h6>";
?>

</body>
</html>
