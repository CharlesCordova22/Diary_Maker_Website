<?php

require('local_setting.php');

$user_name = $_POST['user_name'];
$user_pass = $_POST['user_pass'];

$fetchQuery = "SELECT * FROM user";

$result = mysqli_query($conn, $fetchQuery);

if (mysqli_num_rows($result) > 0) {
    while($userResult = mysqli_fetch_array($result)) {
        if($user_name == $userResult['user_name'] && $user_pass ==  $userResult['user_pass']) {
            header('Location:diary_dashboard.php?user_id='.$userResult['user_id']);
            return 0;
        }
    }
    
    header('Location:login_page.php?authentication=1');
}

?>