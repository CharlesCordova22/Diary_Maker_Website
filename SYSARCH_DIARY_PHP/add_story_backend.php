<?php
    require('local_setting.php');

    $diary_id = $_GET['diary_id'];
    $story_message = $_POST['story_message'];
    $story_date = $_POST['story_date'];
    // SQL script
    // (Inserting Data from Database)

    //Insert Command for Inserting User Data
    $createStoryData = "INSERT INTO story VALUES ('','{$diary_id}','{$story_date}','{$story_message}')";
    $resultFromStory = mysqli_query($conn, $createStoryData);

    //Last Inserted User data (Used for getting the last PK of the newly inserted user)
    header('Location:story_dashboard.php?diary_id='.$diary_id);
?>