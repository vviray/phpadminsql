<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Discriminant</title>
</head>
<body>
    <?php session_start(); ?>

    <?php 
    if(isset($_SESSION["result"])) {
        echo $_SESSION['result'];
    }
    ?>
</body>
</html>
