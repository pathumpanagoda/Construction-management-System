<?php

  include 'connection.php';
   
  if(isset($_POST['sendmessage'])) {
    $Fname = $_POST["first_name"];
    $Lname = $_POST["last_name"];
    $mail = $_POST["Email"];
    $phone = $_POST["Phone"];
    $message = $_POST["Message"];         

    $sql = "INSERT INTO contactus(FirstName,LastName, Email,Phone, Message) VALUES ('$Fname', '$Lname', '$mail','$phone','$message');";


    $result= mysqli_query($conn,$sql);  
    
    if ($result) {
        echo "<script>alert('successul..')
        window.location.href = 'contactus.php'</script>";
    } else {
        echo "<script>alert('Something Went Wrong')
        window.location.href = 'contactus.php'</script>";
    }
}
?>

