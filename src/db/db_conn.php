<?php

    $servername= "localhost";
    $username= "root";
    $password = "";
    $db_name = "my_flybaytv";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if (!$conn) {
        echo "Connection failed!";
    }

?>