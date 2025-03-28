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

// Function to calculate the tax
function calculateTax($totalAmount, $isTakeout) {
    return $isTakeout ? $totalAmount * 0.12 : 0;  // 12% tax for take-out
}

// Function to calculate the total amount
function calculateTotal($unitPrice, $quantity, $tax) {
    return ($unitPrice * $quantity) + $tax;
}

// Process the form data if it is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $dine_or_take = $_POST['dine_take'];
    
    // Get the price of the selected item
    $unit_price = $menu_items[$selected_item];
    
    //total before tax
    $total_amount = $unit_price * $quantity;
    
    //tax if the order is take-out
    $tax = calculateTax($total_amount, $dine_or_take === 'take');
    
    //final total amount
    $final_total = calculateTotal($unit_price, $quantity, $tax);
    
    // Store the result in the session to pass it to the next page
    session_start();
    $_SESSION['selected_item'] = $selected_item;
    $_SESSION['quantity'] = $quantity;
    $_SESSION['unit_price'] = $unit_price;
    $_SESSION['total_amount'] = $total_amount;
    $_SESSION['tax'] = $tax;
    $_SESSION['final_total'] = $final_total;

    // Redirect to the result page
    header("Location: result.php");
    exit();
}
?>
