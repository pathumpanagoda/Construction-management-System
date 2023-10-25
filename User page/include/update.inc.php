<?php
    session_start();
    
    include'dbh.inc.php';

    $email =  $_SESSION["email"];
    
 

if (isset($_POST["update"])) {  
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $cname = $_POST["cname"];
    $telephone = $_POST["telephone"];


    if(!empty($fname) && !empty($lname) && !empty($cname) && !empty($telephone)){
        //update data
        $sql = "UPDATE customers SET cusfname='$fname', cuslname='$lname', cuscname='$cname', custelephone='$telephone' 
        WHERE cusemail='$email';";

        $upresult = mysqli_query($conn, $sql);
        
        if($upresult){
            echo "<script>alert('ok')
            window.location.href = '../userprofile.php'</script>";
            exit();
        }
    }
    else{
        echo "<script>
        window.location.href = '../userprofile.php'
        alert('Please fill all inputs.')
        </script>";
    }
}
else{
    echo "<script>alert('re-try')</script>";
}

?>