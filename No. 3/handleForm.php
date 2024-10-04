<?php
session_start();

$order = $_POST['order'];
$quantity = $_POST['quant'];
$cash = $_POST['cash'];

switch ($order) {
    case 'burger':
        $price = 50;
        break;
    case 'fries':
        $price = 75;
        break;
    case 'steak':
        $price = 150;
        break;
    default:
        $price = 0;
}


$total = $price * $quantity;


$change = $cash - $total;

$_SESSION['order'] = $order;
$_SESSION['quantity'] = $quantity;
$_SESSION['price'] = $price;
$_SESSION['total'] = $total;
$_SESSION['change'] = $change;
$_SESSION['insufficient'] = $insufficient;

$currentDateTime = date("m/d/Y H:i:s");

echo "<h2>Receipt</h2>";
echo "<p>Total Price: $" . number_format($total, 2) . "</p>";
echo "<p>You Paid: $" . number_format($cash, 2) . "<p>";
echo "<p>Change: $" . number_format($change, 2) . "</p>";
echo "<p>$currentDateTime</p>";

if ($cash < $total) {
    header("Location: insufficient.php");
    exit();
}

?>
