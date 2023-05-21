<?php
    require('local_setting.php');

    $diary_id = $_GET['diary_id'];
    $user_id = $_POST['user_id'];

    // SQL script
    // (DELETE Data from Database)

    //DELETE Command for DELETE User Data
    $DeleteUserData = "DELETE FROM diary WHERE diary_id = '{$diary_id}'";
    $resultFromDataDelete = mysqli_query($conn, $DeleteUserData);

    header('Location:diary_dashboard.php?user_id='.$user_id);
?>