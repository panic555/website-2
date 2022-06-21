<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $basename = "project";
    
    $dbc = mysqli_connect($servername, $username, $password, $basename) or die('Error 
    connecting to MySQL server.'.mysqli_error());
    mysqli_set_charset($dbc, "utf8");
    
    if (!$dbc) {
    echo "Connection failed!";
    }
?>