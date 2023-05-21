<?php

    require('local_setting.php');

    $diary_id = $_GET['diary_id'];
    $diaryDetails = array();

    $fetchQuery = "SELECT * FROM diary WHERE diary_id = $diary_id";

    $resultFromDetails = mysqli_query($conn, $fetchQuery);

    while($userResult = mysqli_fetch_array($resultFromDetails)) {
        $diaryDetails['diary_title'] = $userResult['diary_title'];
    }

?>