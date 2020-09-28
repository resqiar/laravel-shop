<?php

    // variable for connection to database
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "veteryan";

    // check connection
    $con = mysqli_connect($server, $username, $password, $dbName) or die("Connection to database was aborted!");