<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="Css/style.css">

	<!----font----->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<img src="images/4.jpg">
	<div class="hed">

		<a href="../index.php"><img src="images/buildUP logo.png"></a>
	<h1>Create an account</h1>
	<h5>Already have a buildup account? <a href="../signin.php" style="color:white;">Log in</a></h5>
	</div>

	<div class="signup-box">
			<h2>Register, Now!</h2>

		<form action="includes/signup.inc.php" method="POST">

			<input type="text" class="allinput" name="fname" placeholder="First name" required>
		
			<input type="text" class="allinput" name="lname" placeholder="Last name" required>
	         
			<input type="text" class="allinput" name="cname" placeholder="Company" required>
			
			<input type="text" class="allinput" name="telephone" placeholder="Telephone number">
			
			<input type="text" class="allinput" name="email" placeholder="E-mail">
			
			<input type="Password" class="allinput" name="password" placeholder="Password" required>
			
			<input type="Password" class="allinput" name="conpassword" placeholder="Confirm Password" required>

			<input type="checkbox" id="vehicle1" name="agree" value="condition" required>

			<label for="agree" class="agree-label"><b>I agree to the <a href="#terms">terms of service</a> and <a href="#privacy">privacy policy</a>.</b></label>
													
			<input class="submit-button" name="submit" type="submit" value="Sign Up">

			<div class="or">OR</div>
			
			<i class="fa-brands fa-google" ></i>
			<i class="fa-brands fa-facebook" ></i>
			<i class="fa-brands fa-square-twitter"></i>
		</form>
</div>
</body>
</html>