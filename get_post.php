<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP get post</title>
</head>
<body>
  <form action="get_post.php" method="get">
    <label for="">user name</label></br>
    <input type="text" name="username"></br>
    <label for="">password</label></br>
    <input type="password" name="password"></br>
    <input type="Submit" value="log in">
  </form>
</body>
</html>


<?php
  echo $_GET["username"]. "<br>";
  echo $_GET["password"]. "<br>";
?>
