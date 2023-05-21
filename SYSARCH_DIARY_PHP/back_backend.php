<?php

require('local_setting.php');

$user_id = $_POST['user_id'];

$fetchQuery = "SELECT * FROM user";

$result = mysqli_query($conn, $fetchQuery);


    while($userResult = mysqli_fetch_array($result)) {
        if($user_id == $userResult['user_id']) {
            header('Location:diary_dashboard.php?user_id='.$userResult['user_id']);
            return 0;
        }
    }

?>