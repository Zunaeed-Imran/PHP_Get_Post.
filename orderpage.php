<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>restaurent Order page</title>
</head>
<body>
  <form action="orderpage.php" method="post">
    <label>quantity</label>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  </form>
</body>
</html>

<?php
  $item = "pizza";
  $price = 5.99;
  $quantity = $_POST["quantity"];
  $total = null;

  $total = $quantity * $price;

  echo "you have order {$quantity} x {$item} <br>";
  echo "and Total is: \${$total}";
?>