<?php
    require('local_setting.php');

    $user_id = $_GET['user_id'];
    $status = $_POST['status'];
    $diary_title = $_POST['diary_title'];
    $diary_created = $_POST['diary_created'];
    // SQL script
    // (Inserting Data from Database)

    //Insert Command for Inserting User Data
    $createDiaryData = "INSERT INTO diary VALUES ('','{$user_id}','{$status}','{$diary_created}','{$diary_title}')";
    $resultFromUser = mysqli_query($conn, $createDiaryData);

    //Last Inserted User data (Used for getting the last PK of the newly inserted user)
    header('Location:diary_dashboard.php?user_id='.$user_id);
?>