<?php
    require('local_setting.php');

    $user_name = $_POST['user_name'];
    $first_name= $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_pass = $_POST['user_pass'];
    $last_login_date = $_POST['last_login_date'];
    // SQL script
    // (Inserting Data from Database)

    //Insert Command for Inserting User Data
    $createUserData = "INSERT INTO user VALUES ('','{$user_name}','{$first_name}','{$last_name}','{$user_pass}',now())";
    $resultFromUser = mysqli_query($conn, $createUserData);

    //Last Inserted User data (Used for getting the last PK of the newly inserted user)
    $lastInsertedPk = mysqli_insert_id($conn);

    header('Location:after_login_page.php?user_id='.$lastInsertedPk);
?>