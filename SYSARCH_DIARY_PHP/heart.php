<?php
require('local_setting.php');

$user_id = $_GET['user_id'];
$story_id = $_GET['story_id'];



$checkQuery = "SELECT * FROM likes WHERE story_id = $story_id AND user_id = $user_id";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) == 0) {
$insertQuery="INSERT INTO likes VALUES('','{$user_id}','{$story_id}')";
$insertResult=mysqli_query($conn,$insertQuery);

$updateQuery="UPDATE story SET heart = heart + 1 WHERE story_id = '{$story_id}'";
$updateResul=mysqli_query($conn, $updateQuery);
}
else {
echo 'Error';
}

header('location:public_wall.php?user_id='.$user_id);

?>