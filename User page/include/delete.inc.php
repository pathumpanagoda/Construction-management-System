<?php
session_start();

    include('dbh.inc.php');

    $email =  $_SESSION["email"];
    
    if (isset($_POST["delete"])) {
        $sql = "DELETE FROM customers WHERE cusemail = '$email';";

        $query_run = mysqli_query($conn, $sql);

        if( $query_run){
            echo "<script>alert('account delete successfuly!')
            window.location.href = '../../index.php'</script>";
            exit();
        }
        else{
            echo "<script>alert('account delete unsuccessfuly!')
            window.location.href = '../user.php'</script>";
            exit();
        }
    }
    else{
        echo "<script>alert('account delete unsuccessfuly!')
            window.location.href = '../userprofile.php'</script>";
            exit();
    }
?>    