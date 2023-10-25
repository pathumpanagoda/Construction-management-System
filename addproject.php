<?php
session_start();
if(isset($_POST['submit']))
{
include 'connection.php';

// Retrieve form data
$projectName = $_POST['projectName'];
$projectDescription = $_POST['projectDescription'];
$projectLocation = $_POST['projectLocation'];
$projectAmount = $_POST['projectAmount'];
$email = $_SESSION["email"];

// Insert data into the database
$sql = "INSERT INTO projects (name, description, location, amount, email) VALUES ('$projectName', '$projectDescription', '$projectLocation', '$projectAmount', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Project Added')
            window.location.href = 'User page/user.php'</script>";
} else {
  echo "<script>alert('Something Went Wrong')
            window.location.href = 'addproject.php'</script>";
}

// Close the database connection
mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Project Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 500px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      display: block;
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin: 0 auto;

    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Project Information</h1>
  
  <form action="addproject.php" method="POST">
    
    <label for="projectName">Project Name:</label>
    <input type="text" id="projectName" name="projectName" required><br><br>
    
    <label for="projectDescription">Project Description:</label>
    <textarea id="projectDescription" name="projectDescription" rows="4" cols="50" required></textarea><br><br>
    
    <label for="projectLocation">Project Location:</label>
    <input type="text" id="projectLocation" name="projectLocation" required><br><br>
    
    <label for="projectAmount">Project Amount:</label>
    <input type="text" id="projectAmount" name="projectAmount" required><br><br>
    
    <input type="submit" value="Add Project" name="submit">
  </form>
</body>
</html>
