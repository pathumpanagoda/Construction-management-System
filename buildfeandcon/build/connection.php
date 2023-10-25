<?php

    $sname = "localhost";
    $usname = "root";
    $password = "";
    $dbname = "buildup";

    $conn = mysqli_connect($sname, $usname, $password, $dbname);

    if(!$conn) {
        echo "Connection Failed";
    }

