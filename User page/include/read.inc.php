<?php
session_start();
 include('dbh.inc.php');

$temp =  $_SESSION["email"];

$sql = "SELECT * FROM customers WHERE cusemail = '$temp'";

				
			$gotresult = mysqli_query($conn, $sql);
				

			if($gotresult){

				if(mysqli_num_rows($gotresult)>0){

					while ($row = mysqli_fetch_array($gotresult)) {
							$_SESSION['cusEmail'] = $row['cusemail'];
							$_SESSION['firstName'] = $row['cusfname'];
							$_SESSION['lastName'] = $row['cuslname'];
							$_SESSION['cusName'] =  $row['cuscname'];
							$_SESSION['mobileNo'] = $row['custelephone'];
 					}
 				}
 			}				
?>