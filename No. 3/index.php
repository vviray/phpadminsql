<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering System</title>
</head>
<body>
    <?php session_start(); ?>

    <form method="POST" action="handleForm.php">
        <h1>Menu</h1>
        <table border="1">
            <tr>
                <th>Order</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td id="burger">Burger</td>
                <td id="burprice">50</td>
            </tr>
            <tr>
                <td id="fries">Fries</td>
                <td id="friprice">75</td>
            </tr>
            <tr>
                <td id="steak">Steak</td>
                <td id="stprice">150</td>
            </tr>
        </table>
        <p>Select an Order
            <select name="order" placeholder="Choose">
                <option value="burger">Burger</option>
                <option value="fries">Fries</option>
                <option value="steak">Steak</option>
            </select>
        </p>
        <p>Quantity<input type="number" name="quant"></p>
        <p>Cash<input type="number" name="cash"></p>
        <input type="submit" value="Submit" name="submitBtn">
    </form>
</body>
</html>
