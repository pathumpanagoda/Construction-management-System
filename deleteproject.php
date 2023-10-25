<?php
session_start();

if (isset($_GET["id"])) {

    require_once 'connection.php';

    $pid = $_GET["id"];

    // Delete the project from the database
    $sql = "DELETE FROM projects WHERE pid = '$pid';";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "<script>alert('Project Delete Error')
            window.location.href = 'project.php'</script>";
        exit();
    }

    echo "<script>alert('Project Deleted')
            window.location.href = 'project.php'</script>";
    exit();
}
?>