<?php

session_start();
if(isset($_POST['username']) && isset($_POST['passwrd']))
{
    $email = $_POST['username'];
    $pass = $_POST['passwrd'];


    include 'connection.php';
    $sql=mysqli_query($conn,"SELECT * FROM customers where cusemail='$email' and cuspassword='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        if(isset($_POST['remember'])) {
            setcookie('username', $email, time() + 60*60*24*365);
            setcookie('passwrd', $pass, time() + 60*60*24*365);
        }
        else{
            setcookie('username', $email, 30);
            setcookie('passwrd', $pass, 30);
        }
        
        $_SESSION['IS_LOGIN']='yes';
        $_SESSION["id"] = $row['id'];
        $_SESSION["email"]= $_POST['username'];
        $_SESSION["date"]=$row['date']; 
        header("Location: home.php"); 
    }
    else
    {
        header("Location: signin.php?error=Incorrect Username or password");
        exit();
    }
}

$username_cookie='';
$password_cookie='';
$set_remember="";

if(isset($_COOKIE['username']) && isset($_COOKIE['passwrd'])) {
    $username_cookie=$_COOKIE['username'];
    $password_cookie=$_COOKIE['passwrd'];
    $set_remember="checked='checked'";
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
        <form action="signin.php" method="post" >
            <h3>Sign in to BuildUp</h3>

            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>

            <label for="username">
                Username
            </label>
            <input type="text" placeholder="Email" id="username" name="username" autocomplete="off" required value="<?php echo $username_cookie ?>">

            <label for="username">
                Password
            </label>
            <input type="password" placeholder="Password" id="username" name="passwrd" autocomplete="off" required value="<?php echo $password_cookie ?>">

            <div class="forgot-remember">
                <div class="remember">
                    <input type="checkbox" name="remember" <?php echo $set_remember?>>
                    <p>Remember Me</p>
                </div>
                <div class="forgot">
                    <a href="forgot.php">Forgot Password?</a>
                </div>
            </div>

            <a href="#">
                <input type="submit" value="Sign in" name="submit" id="submit">
            </a>

            <div class="social">
                <div class="google">Google</div>
                <div class="fb">Facebook</div>
            </div>
            <div class="signup">
                <p>Didn't have an account?</p>
                <a href="signUp/signup.php">Sign up</a>
            </div>
        </form>
    </body>
</html>