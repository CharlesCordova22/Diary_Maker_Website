<?php
    require('local_setting.php');

    $diary_title = $_POST['diary_title'];
    $diary_id = $_GET['diary_id'];
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];
    // SQL script
    // (Updating Data from Database)

    //UPDATE Command for UPDATING User Data
    $UpdateDiaryData = "UPDATE diary SET status = '{$status}', diary_title = '{$diary_title}' WHERE diary_id = '{$diary_id}'";

    $resultFromDiaryUpdate = mysqli_query($conn, $UpdateDiaryData);

    header('Location:diary_dashboard.php?user_id='.$user_id);
?>