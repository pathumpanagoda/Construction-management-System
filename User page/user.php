<?php 
    include 'include/read.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/userstyle.css">
	<link rel="stylesheet" type="text/css" href="footer-css/footer.css">

	<!----font----->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


<!--------navigation bar------------->

 	<div class="horizontalNavbar">
		<a href="../home.php" ><img src="images/logo.png"></a>

	<i class="fa-regular fa-bell"></i>
	<i class="fa-regular fa-envelope"></i>
	<i class="fa-solid fa-user" onclick="menuToggle();" id="prof-user"></i>


    <!-------action menu----------->

	<div class="action" id="subMenu">
		<div class="menu">
		<br>
		<h3><?php echo "hello! ".$_SESSION['firstName'] ?><br></h3>
		<p>user</p>
		<ul>
			<li>
				<i class="fa-solid fa-bars" ></i>
				<a href="user.php">Dashboard</a></li>
			<li>
				<i class="fa-solid fa-user" ></i>
				<a href="userprofile.php">Edit profile</a></li>
			<li>
				<i class="fa-solid fa-gear" ></i>
				<a href="#f">Settings & Privacy</a></li>
			<li>
				<i class="fa-solid fa-circle-question"></i>
				<a href="#f">Help & Support</a></li>
			<li>
				<i class="fa-solid fa-right-from-bracket"></i>
				<a href="../signout.php">Log Out</a></li>
		</ul>
	</div>
	</div> 
	</div>	

	<div class="DASHBOARD">
		<h2>Main-Dashboard</h2>
	</div>
	<div class="addProject">
		<img src="images/zoom.png">
	<a href="../addproject.php">	<button type="button" >+Add New Project</button></a>
    </div>
	
<!----------project summary-------->

    <div class="projectsummary">
    	<div class="topic-bar"><b>Project Summary</b></div>
    	<div class="inprogress">
    		<img src="images/reduce-time.png">
    		<h1>5</h1>
    		<p>In progress project</p>
    	</div>
    	<div class="compleated">
    		<img src="images/goal.png">
    		<h1>6</h1>
    		<p>Compleated project</p>
    	</div>
    	<div class="notstarted">
    		<img src="images/no-results.png">
    		<h1>3</h1>
    		<p>Notstarted project</p>
    	</div>	
    </div>


<!---------date section---------->

    <div class="todayis">
    	<img src="images/blank-calendar-icon-png-27.jpg">
    	<h2>Today</h2>
    	<input type="date" name="date">

    </div>


<div class="box">
	<div class="percent">
		<svg>
			<circle cx="50" cy="50" r="50"></circle>
			<circle cx="50" cy="50" r="50"></circle>
		</svg>
		<div class="number">
			<h2>87<span>%</span></h2>
		</div>
	</div>
	<h4>Utilized Budget</h4>
</div>
	
<div class="sidebar">

	<img src="images/woman.png">
	<h3><?php echo $_SESSION['firstName']." ".$_SESSION['lastName'] ?></h3>
	<p><?php echo $_SESSION['cusEmail'] ?></p>


	<ul>
		<li class="list active"><a href="user.php" ><i class="fa-solid fa-bars "></i>Dashboard</a></li>

		<li class="list"><a href="userprofile.php"><i class="fa-regular fa-address-card"></i>Profile information</a></li>

		<li class="list"><a href="../project.php"><i class="fa-solid fa-chart-line"></i>My project</a></li>

		<li class="list"><a href="#Document"><i class="fa-regular fa-file"></i>Document</a></li>

		<li class="list"><a href="#Task"><i class="fa-solid fa-list-check"></i>Task</a></li>

		<li class="list"><a href="#Timetracking"><i class="fa-regular fa-clock"></i>Milestone</a></li>

		<li class="list"><a href="#Chat"><i class="fa-regular fa-comment"> </i>Chat</a></li> 

		<li class="list"><a href="#Help/Support"><i class="fa-regular fa-circle-question"></i>Help/Support</a></li>	
		
		<li class="list"><a href="../signin.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log out</a></li>
	</ul>

</div>


    <!---------line-chart----------->

	<div class="chart"><canvas id="myChart"  ></canvas></div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>


    <!----------footer------------->
                    
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
                        <img src="images\sm1.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images\sm2.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images\sm3.png" alt="">
                    </a>
                </div>
                <div class="download">
                    <a href="#">
                        <img src="images\d1.png" alt="">
                    </a>
                    <a href="#">
                        <img src="images\d2.png" alt="">
                    </a>
                </div>
                <div class="map">
                    <a href="#"><img src="images\m.jpg" alt=""></a>
                </div>
            </div>
        </footer>


<script >

//drop-down menu..

	let subMenu = document.getElementById("subMenu");

	function menuToggle(){
		subMenu.classList.toggle("open-menu");
	}

	
//line graph..

	const ctx=document.getElementById('myChart');
	new Chart(ctx,{
		type:'line',
		data:{
			labels:['project 01','project 02','project 03','project 04','project 05','project 06'],
			datasets:[{
				label:'# COST PER PROJECT',
				data:[12,18,3,7,3,5],
				borderColor:'#096B00',
				fill: true,
				backgroundColor: 'rgba(238,250,246,0.5)',
			}]
		},
		options:{
			animation:{
				duration:5000,
			},
			responsive:true,
			maintainAspectRatio:false,
			scales:{
				x:{title:{
						display:true,
						text:'PROJECTS',
						color:'blue',
					},
				grid:{
					display:false,
				},
				},
				y:{
					beginAtZero:true,
					title:{
						display:true,
						text:'COST(Rs.)',
						color:'blue',
					},
				}
			}
		}
	});

	
</script>

</body>
</html>