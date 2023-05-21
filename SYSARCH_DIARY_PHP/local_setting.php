<?php

    //MYSQL Connection
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'sysarch_cordova_db';
    $conn = mysqli_connect($host, $username, $password);
    
    $db_config = mysqli_select_db($conn, $db_name);

    $query_user ="SELECT * FROM user";
    $user  = mysqli_query($conn, $query_user);
    $row_user = mysqli_fetch_assoc($user);
    $totalRows_user = mysqli_num_rows($user);

    $query_diary ="SELECT * FROM diary";
    $diary  = mysqli_query($conn, $query_diary);
    $row_diary = mysqli_fetch_assoc($diary);
    $totalRows_diary = mysqli_num_rows($diary);

?>