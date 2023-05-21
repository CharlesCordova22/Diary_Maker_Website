<?php
session_start();
// destroy the session
session_destroy();

// redirect to the login page
header("Location:login_page.php");
exit();
?>