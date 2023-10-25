<!DOCTYPE html>
<html>
<head>
  <title>Project List</title>
  <style>
    h1 {
      display: flex;
      justify-content: center;
      background-color: rgb(236, 164, 7);
      font-weight: 800;
      font-size: 50px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th {
      border: 4px solid #ccc;
      background-color: rgb(236, 164, 7);
      font-size: 20px;
    }

    td {
      border: 4px solid #ccc;
      padding: 8px;
      text-align: left;
      font-size: 20px;
    }
    button {
      display: block;
      background-color: red;
      border: none;
      border-radius: 5px;
      color: white;
      margin: 0 auto;
    }
    
    a {
      text-decoration:none;
    }

  </style>
</head>
<body>
  <h1>Project List</h1>

  <?php


  // Retrieve project data from the database
  session_start();
  $email = $_SESSION["email"];
  include 'connection.php';
  $sql = "SELECT * FROM projects WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // Display the project data in a table
    echo "<table>
            <tr>
              <th>Project ID</th>
              <th>Project Name</th>
              <th>Description</th>
              <th>Location</th>
              <th>Amount</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>".$row['pid']."</td>
              <td>".$row['name']."</td>
              <td>".$row['description']."</td>
              <td>".$row['location']."</td>
              <td>".$row['amount']."</td>
              <td><a href='deleteproject.php?id=".$row['pid']."'><button class='approve-btn'>Delete</button></a></td>
            </tr>";
    }

    echo "</table>";
  } else {
    echo "<h2>No projects found.</h2>";
  }

  // Close the database connection
  mysqli_close($conn);
  ?>
</body>
</html>
