<?php

session_start();
if(isset($_POST['submit'])) {
  $npass=$_POST['newpasswrd'];
  $cpass=$_POST['confirmpasswrd'];
  $email=$_SESSION['email'];

  echo "$npass";
  include 'connection.php';
  if($npass === $cpass) {
    $sql = "UPDATE customers SET cuspassword = '$npass' WHERE cusemail = '$email'";
    if($conn->query($sql) === TRUE) {
      echo "<script>alert('Password Updated')
            window.location.href = 'signin.php'</script>";
    }
    else {
      echo "<script>alert('Something Went Wrong')
            window.location.href = 'reset_password.php'</script>";
    }
  }
  else
  {
    header("Location: reset_password.php?error=Password doesn't match");
        exit();
  }


}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>buildUp sign in</title>
        <link rel="stylesheet" href="css/signin.css">
    </head>
    <body>
        <a href="index.php" class="logo-white">
            <img src="media/logo-white.png" alt="">
        </a>
        <form action="reset_password.php" method="post" >
            <h3>Reset Password</h3>

            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>

            <label for="username">
                Code
            </label>
            <input type="text" placeholder="Enter Code" id="username" name="code" autocomplete="off" required >

            <label for="username">
                New Password
            </label>
            <input type="password" placeholder="New Password" id="username" name="newpasswrd" autocomplete="off" required >

            <label for="username">
                Confirm Password
            </label>
            <input type="password" placeholder="Confirm Password" id="username" name="confirmpasswrd" autocomplete="off" required >

            <a href="#">
                <input type="submit" value="Reset" name="submit" id="submit">
            </a>
        </form>
    </body>
</html>