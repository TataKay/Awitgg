<?php
include "./connection/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="CSS/Styles.css">
</head>

<body>
  <form action="auth2.php" method="post">
    <h2>Register</h2>
    <?php 
    if (isset($_GET['error'])){ ?>
      <p class="error"><?php echo  $_GET["error"]; ?></p>
    <?php }
    ?>

    <?php 
    if (isset($_GET['success'])){ ?>
      <p class="success"><?php echo  $_GET["success"]; ?></p>
    <?php }
    ?>

    <label for="">Name</label>
    <?php 
    if (isset($_GET['name'])){ ?>
      <input type="text" 
             name="name" 
             placeholder="Enter your name" 
             value="<?php echo  $_GET["name"]; ?>"> 
             <br />
    <?php }else{ ?>
      <input type="text" 
             name="name" 
             placeholder="Enter your name"> <br />
    <?php } ?>

    <label for="">Email Address</label>
    <?php 
    if (isset($_GET['email'])){ ?>
      <input type="email" 
             name="email" 
             placeholder="Enter your email address" 
             value="<?php echo  $_GET["email"]; ?>"> 
             <br />
    <?php }else{ ?>
      <input type="email" 
             name="email" 
             placeholder="Enter your email"> <br />
    <?php } ?>


    <label for="">Password</label>
    <input type="password" 
           name="password" 
           placeholder="Enter your password"> 
           <br />

    <label for="">Re Password</label>
    <input type="password" 
           name="re_password" 
           placeholder="Retype  your password"> 
           <br />

    <button type="submit">register</button>

    Already have an account? <a href="./login.php" class="ca">login now</a>

  </form>

</body>

</html>