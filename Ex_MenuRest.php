<!DOCTYPE html>
<html>
    <head>
        <title> Menu Restaurant </title>
        <meta charset = "UTF-8">
    </head>

    <body>
        <form action = " Ex_MenuRest.php " method = "post">
            <label> quantity : </label>
            <br>
            <input type="text" name="quantity">
            <br>
            <input type="submit" value="total">
            <br>
        </form>
    </body>
</html>

<?php
    $item = "salad";
    $price = 4.50;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity ; 
    echo "You have ordered {$quantity} x {$item}/s . <br>";
    
    echo "Your total is {$total} \$";
?>