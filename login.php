<?php
require_once "./connection/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="CSS/Styles.css">
</head>

<body>
  <form action="auth.php" method="post">
    <h2>Login</h2>
    <?php 
    if (isset($_GET['error'])){ ?>
      <p class="error"><?php echo  $_GET["error"]; ?></p>
    <?php }
    ?>
    <label for="">Email Address</label>
    <input type="email" name="email" placeholder="Enter your email"> <br />

    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter your password"> <br />

    <button type="submit">login</button>

    Do have an account?<a href="./register.php"class="ca">signup now</a>

  </form>

</body>

</html>