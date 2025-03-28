<?php
session_start();

// Retrieve the session data
$selected_item = $_SESSION['selected_item'];
$quantity = $_SESSION['quantity'];
$unit_price = $_SESSION['unit_price'];
$total_amount = $_SESSION['total_amount'];
$tax = $_SESSION['tax'];
$final_total = $_SESSION['final_total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="order-summary">
            <h1>Order Summary</h1>
            <p>Item: <?php echo $selected_item; ?></p>
            <p>Quantity: <?php echo $quantity; ?></p>
            <p>Unit Price: $<?php echo number_format($unit_price, 2); ?></p>
            <p>Total before tax: $<?php echo number_format($total_amount, 2); ?></p>
            <p>Tax: $<?php echo number_format($tax, 2); ?></p>
            <p><strong>Total amount due: $<?php echo number_format($final_total, 2); ?></strong></p>
            <h2> Thank you for your order!</h2>
            <center><p>We hope you enjoy your meal!</p></center>
            <form method="POST" action="PT8_COMPACION_WITH_ALGORITHM.php">
                <button class="back" type="submit">Order Again</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <center><p>&copy; 2025 Japanese Restaurant. All rights reserved. Created by: CCCompacion</p></center>
</body>
</html>
