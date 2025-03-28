<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Japanese Shop Order</title>
    <link rel="stylesheet" href="style.css">
    <style> 
    .logo {
         border-top: 10px solid #40E0D0;
         border-bottom: 10px solid #40E0D0;
         border-left: 10px solid #40E0D0;
         border-radius: 50% ;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="order-summary">
            <h1>Order your Japanese dishes!</h1>
            <form method="POST" action="menu.php">
                <label for="item">Choose an item:</label>
                <select name="item" id="item">
                    <?php
                    //menu items and their prices
                    $menu_items = [
                        "Karaage" => 10.00,
                        "Donburi" => 12.00,
                        "Temaki" => 8.00,
                        "Somen" => 8.00,
                        "Chawanmushi" => 7.00,
                        "Suppon Nabe" => 65.00,
                        "Miso Shiru" => 3.00,
                        "Yakisoba" => 10.00
                    ];

                    // Loop through the menu items and display them in the select dropdown
                    foreach ($menu_items as $item => $price) {
                        echo "<option value=\"$item\">$item ($" . number_format($price, 2) . ")</option>";
                    }
                    ?>
                </select>
                <br><br>

                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" required>
                <br><br>

                <label for="dine_take">Choose:</label>
                <input type="radio" name="dine_take" value="dine" checked> Dine In
                <input type="radio" name="dine_take" value="take"> Take Out
                <br><br>

                <button class="back" type="submit">Total</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <center><p>&copy; 2025 Japanese Restaurant. All rights reserved. Created by:CCCompacion</p></center>
    </div>
</body>
</html>
