<?php
    require('local_setting.php');
    $user_id = $_GET['user_id'];
    $userDetails = array();
    $queryLastName = "SELECT * FROM user WHERE user_id = $user_id";
    $queryLastNameResult = mysqli_query($conn,$queryLastName);

    while($resultDiary = mysqli_fetch_array($queryLastNameResult)){
        $userDetails['user_name'] =$resultDiary['user_name'];
    }
?>