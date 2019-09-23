<?php
    session_start();
    $uid=$_SESSION['uid'];
	include_once '../config/dashboard.php';
	$user = new Dashboard();
    $user->get_admindetails($uid);
    if (!$user->get_session()){
      header("location:login.php");
     }

?>