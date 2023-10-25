<?php

session_start();
if(isset($_POST['submit']))
{
  $email=$_POST['email'];

  include 'connection.php';
  $sql=mysqli_query($conn,"SELECT * FROM customers where cusemail='$email'");
  $row  = mysqli_fetch_array($sql);
  if(is_array($row))
  {
    $_SESSION['email'] = $email;
    header("Location: reset_password.php");
  }
  else
  {
    header("Location: forgot.php?error=Invalid Email!");
        exit();
  }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>forgot password</title>
        <link rel="stylesheet" href="css/forgot.css">
    </head>
    <body>
        <a href="index.php" class="logo-white"><img src="media/logo-white.png" alt=""></a>
        <form action="forgot.php" method="post">
            <h3>Forgot password</h3>

            <?php if(isset($_GET['error'])) { ?>
              <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label for="Email">
                Email
            </label>
            <input type="email" placeholder="Enter Email Address" id="email" name="email" autocomplete="off" required>
            <a href="#reset_password.php">
                <input type="submit" value="Send Code" name="submit" id="submit">
            </a>
        </form>
    </body>
</html>
