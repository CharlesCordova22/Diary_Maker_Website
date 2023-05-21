<?php
    require('local_setting.php');

    $story_id = $_GET['story_id'];
    $diary_id = $_POST['diary_id'];

    // SQL script
    // (DELETE Data from Database)

    //DELETE Command for DELETE User Data
    $DeleteStoryData = "DELETE FROM story WHERE story_id = '{$story_id}'";
    $resultFromStoryDelete = mysqli_query($conn, $DeleteStoryData);

    header('Location:story_dashboard.php?diary_id='.$diary_id);
?>