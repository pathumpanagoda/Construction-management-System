<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>buildup contact us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="contactus.css">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body>
	
  <div class="header">
      <navbar>
      <a href="../../index.php"><img src="buildUP logo.png" class="logo"></a> 
          
          <ul class="nav-links">
            <li><a href="../../udani\.vscode\about html.html" class="N">ABOUT</a></li>
            <li><a href="buildupfeatures.html" class="N">FEATURES</a></li>
            <li><a href="../../udani/.vscode/html reviws.html" class="N">REVIEWS</a></li>
            <li><a href="../../packages\packages.html" class="N">PACKAGES</a></li>
            <li><a href="contactus.php" class="N">CONTACTS</a></li>
              <li id="btn"><a href="#">SIGN IN</a></li>
              <li id="btn"><a href="#">SIGN UP</a></li>
              
          </ul>
      </navbar>
  </div>

     <div class="background_image">
    <section class = "contact-section">
      <div class = "contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact us</h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text">Fill out the form and a member from our team will get back to you within 24hours.</p>
      </div>


      <div class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <span class = "text">011 123 2233<br>011 678 9999</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class = "text">info@buildup.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>Address</span>
            <span class = "text">BuildUp Construction(Pvt)Ltd, <br>
                        No 10,Prince Street,Colombo 10,<br>
                        SriLanka.</span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>Opening Hours</span>
            <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
          </div>
        </div>

        <div class = "contact-form">
          <form action="contactusphp.php" method="POST">
            <div>
              <input type = "text" class = "form-control" name = "first_name" placeholder="First Name">
              <input type = "text" class = "form-control" name = "last_name" placeholder="Last Name">
            </div>
            <div>
              <input type = "email" class = "form-control" name ="Email" placeholder="E-mail">
              <input type = "text" class = "form-control" name ="Phone" placeholder="Phone">
            </div>
            <textarea rows = "5" placeholder="Message" name ="Message" class = "form-control"></textarea>
            <input type = "submit" class = "send-btn" value = "send message" name="sendmessage">
          </form>

          <div>
            <img src = "image/contact-png.png" alt = "">
          </div>
        </div>
      </div>

      <div class = "map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.619656991621!2d79.8518691!3d6.935979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25921fcb7b0c1%3A0xf5c7cc066c0966a5!2sPrince%20Street%2C%20Colombo!5e0!3m2!1sen!2slk!4v1686406184428!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0"></iframe>
      
	  </div>

      <div class = "contact-footer">
        <h3>Follow Us</h3>
        <div class = "social-links">
          <a href = "#" class = "fab fa-facebook-f"></a>
          <a href = "#" class = "fab fa-twitter"></a>
          <a href = "#" class = "fab fa-instagram"></a>
          <a href = "#" class = "fab fa-linkedin"></a>
          <a href = "#" class = "fab fa-youtube"></a>
        </div>
      </div>
    </section>

    

  </body>
</html>