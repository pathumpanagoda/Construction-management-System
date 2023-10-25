<?php

session_start();
if(!isset($_SESSION['IS_LOGIN'])) {

    header('location: signin.php');
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="css\navbar.css">
    </head>
    <body>
        <div class="head">
            <div>
                <h1>
                Manage your<br>
                All task in one place<br>
                With buildup
                </h1>
                <p>Improve quality, reduce cost and gain full control of your tasks</p>
            </div>
            <div class="demo">
                <h4>Want to try</h4>
                <a href="p\Demoo.php" class="request">Request DEMO</a>
            </div>
        </div>

        <div class="header">
            <navbar>
                <img src="media\logo.png" class="logo">
                <input type="checkbox" id="togl" class="toggle">
                <label for="togl" class="togl-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </label> 

                <ul class="nav-links">
                    <li><a href="udani\.vscode\about html.html" class="N">ABOUT</a></li>
                    <li><a href="buildfeandcon\build\buildupfeatures.html" class="N">FEATURES</a></li>
                    <li><a href="udani/.vscode/html reviws.html" class="N">REVIEWS</a></li>
                    <li><a href="packages\packages.html" class="N">PACKAGES</a></li>
                    <li><a href="buildfeandcon\build\contactus.php" class="N">CONTACTS</a></li>
                    <li class="btnicon"><a href="User page/user.php"><img src="media\ui.png" alt=""></a></li>
                    
                </ul>
            </navbar>
        </div>

        <div class="slideshow">
            <div class="slider">
                 <div class="slides">
                    <input type="radio" name="r-btn" id="r1">
                   <input type="radio" name="r-btn" id="r2">
                   <input type="radio" name="r-btn" id="r3">
                    <input type="radio" name="r-btn" id="r4">

                    <div class="slide first">
                        <img src="media\slide1.jpg" alt="">
                    </div>
                    <div class="slide">
                       <img src="media\slide2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="media\slide3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="media\slide4.jpg" alt="">
                    </div>

                    <div class="nav-auto">
                         <div class="auto-b1"></div>
                         <div class="auto-b2"></div>
                        <div class="auto-b3"></div>
                        <div class="auto-b4"></div>
                    </div>
                    <div class="man-nav">
                        <label for="r1" class="man-b"></label>
                        <label for="r2" class="man-b"></label>
                        <label for="r3" class="man-b"></label>
                        <label for="r4" class="man-b"></label>
                    </div>
                </div>
                <script type="text/javascript">
                    var counter = 1;
                    setInterval(function(){
                        document.getElementById('r' + counter).checked = true;
                        counter++;
                        if(counter > 4){
                            counter = 1;
                        }
                    }, 5000);
                </script>
            </div>
        </div>
        <div class="featuers">
            <div class="fea-ben">
                <a href="#" class="fab">Featuers And Benifits</a>
            </div>
            <div class="carousel">
                <button class="pre-btn"><img src="media\pre.png" alt=""></button>
                <button class="nxt-btn"><img src="media\next.png" alt=""></button>
                <div class="carl">
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img1.jpeg" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img2.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img3.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img1.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img2.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img3.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="contain">
                        <div class="fet wrapper">
                            <div class="fet-text">
                                <h3>FEATURES</h3>
                                <p>BuildUp construction Management system</p>
                            </div>
                            <div class="fet-img">
                                <img src="media\img4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="carousel.js"></script>
        </div>
        <div class="tabs reveal">
            <h3 class="care">We care about you</h3>
            <ul class="care-list">
                <li>
                    <a href="#">
                        <button class="button">24 X 7 customer support</button>
                    </a>
                    <a href="#">
                        <button class="button">Experts ideas</button>
                    </a>
                    <a href="#">
                        <button class="button">Introducing partners</button>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <button class="button">Security</button>
                    </a>
                    <a href="#">
                        <button class="button">FAQs</button>
                    </a>
                    <a href="#">
                        <button class="button">Discount</button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="reviews reveal">
            <div class="reviews-text">
                <a href="#">Reviews</a>
            </div>
            <div class="reviews-slide">
                <div class="rv-rotate">
                    <input type="radio" name="slider" id="b1" checked>
                    <input type="radio" name="slider" id="b2">
                    <input type="radio" name="slider" id="b3">
                    <input type="radio" name="slider" id="b4">
                    <input type="radio" name="slider" id="b5">
                    <input type="radio" name="slider" id="b6">
                    <input type="radio" name="slider" id="b7">
            
                    <div class="cards">
                        <label for="b1" id="card1">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p7.jpg" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                        <label for="b2" id="card2">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p2.jpeg" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                        <label for="b3" id="card3">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p3.webp" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                        <label for="b4" id="card4">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p4.jpg" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                        <label for="b5" id="card5">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p5.jpeg" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                        <label for="b6" id="card6">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p6.webp" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                        <label for="b7" id="card7">
                            <div class="rv-slide">
                                <div class="photo">
                                    <img src="media\p1.jpg" alt="">
                                </div>
                                <div class="info">
                                    <span class="quote">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</span>
                                    <span class="name">Nik Deivd</span>
                                    <span class="company">jicco</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners reveal">
            <div class="partners-text">
                <h3>Trusted partners</h3>
            </div>
            <div class="partners-logo">
                <img src="media\pl1.png" alt="">
                <img src="media\pl2.png" alt="">
                <img src="media\pl3.png" alt="">
                <img src="media\pl4.png" alt="">
            </div>
        </div>
        <div class="power-up reveal">
            <div class="power-up-card">
                <div class="power-up-text">
                    Power up with buildup
                </div>
                <div class="power-up-button">
                    <a href="p\Demoo.php">Request DEMO</a>
                </div>
            </div>
        </div>
        <footer class="foot reveal">
            <div class="links">
                <div class="access">
                    <div class="access-font">
                        <h3>Quick Access</h3>
                    </div>
                    <div class="access-links">
                        <a href="#">About</a>
                        <a href="#">Features</a>
                        <a href="#">Reviews</a>
                        <a href="#">Packages</a>
                    </div>
                </div>
                <div class="other">
                    <div class="other-font">
                        <h3>Other links</h3>
                    </div>
                    <div class="other-links">
                        <a href="#">FAQs</a>
                        <a href="#">Terms and Conditions</a>
                        <a href="#">Help</a>
                        <a href="#">Our Misson</a>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact-font">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="contact-details">
                        <a href="tel:+9411 123 2233">(+94)11 123 2233</a>
                        <a href="tel:+9411 678 9999">(+94)11 678 9999</a>
                        <a href="mailto:info@buildup.com">info@buildup.com</a>
                    </div>
                </div>
                <div class="location">
                    <div class="location-font">
                        <h3>Location</h3>
                    </div>
                    <div class="address">
                        <p>No.10, Prince Road,<br>Colombo 10,<br>Sri Lanka</p>
                    </div>
                </div>
            </div>
            <div class="media ">
                <div class="social-media">
                    <a href="#">
                        <img src="media\sm1.png" alt="">
                    </a>
                    <a href="#">
                        <img src="media\sm2.png" alt="">
                    </a>
                    <a href="#">
                        <img src="media\sm3.png" alt="">
                    </a>
                </div>
                <div class="download">
                    <a href="#">
                        <img src="media\d1.png" alt="">
                    </a>
                    <a href="#">
                        <img src="media\d2.png" alt="">
                    </a>
                </div>
                <div class="map">
                    <a href="#"><img src="media\m.jpg" alt=""></a>
                </div>
            </div>
        </footer>
        <script>
            window.addEventListener('scroll', reveal);

            function reveal(){
                var reveals = document.querySelectorAll('.reveal');

                for(var i=0; i < reveals.length; i++){
                    var windowheight = window.innerHeight;
                    var revealtop = reveals[i].getBoundingClientRect().top;
                    var revealpoint = 20;

                    if(revealtop < windowheight - revealpoint){
                        reveals[i].classList.add('active');
                    }
                    else{
                        reveals[i].classList.remove('active');
                    }
                }
            }

        </script>
    </body>
</html>
