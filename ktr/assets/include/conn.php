<?php
    $host     = "localhost";
    $user     = "root";
    $password = "";
    $database = "kth";
    $dblink = mysqli_connect("localhost", "root", "", "kth");
    /* If connection fails throw an error */
    if (mysqli_connect_errno()) {
    echo "Could  not connect to database: Error: ".mysqli_connect_error();
    exit();
}
?>
