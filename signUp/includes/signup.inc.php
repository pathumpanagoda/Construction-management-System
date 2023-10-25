<?php
session_start();

if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $cname = $_POST["cname"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $conpassword = $_POST["conpassword"];


//password matcking
    if ($password !== $conpassword) {
        echo "<script>alert('Password does not match, Try Again..');
            window.location.href = '../signup.php';
            </script>";
        exit();
    }

         require_once 'dbh.inc.php';

         $dublicateEmail = "SELECT * FROM customers WHERE cusemail = '$email';";
         $result = mysqli_query($conn,$dublicateEmail);


//checking email address exists
    if (mysqli_num_rows($result) > 0) {

        echo "<script>alert('Email Already Taken, Try Again..');
            window.location.href = '../signup.php';
            </script>";
        exit();
    }


    else{

        //insert data into customers table..
    $query = "INSERT INTO customers(cusfname, cuslname, cuscname, custelephone, cusemail, cuspassword) VALUES ('$fname', '$lname', '$cname', '$telephone', '$email', '$password');";

        $result = mysqli_query($conn,$query);

        if($result){
            echo "<script>alert('Account has been create sucessfully..');
            window.location.href = '../../signin.php';
            </script>";
        }
        else{
            header("Location:../signup.php?signup=error..!");
        }

    }
}