<?php
    $servername = "localhost";
    $username = "root";
    $password = "Ram@09121997";
    $dbname = "syncfusion";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error) {        
        die("Connection failed" . $conn->connect_error);
    }
?>