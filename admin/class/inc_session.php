<?php

session_start();
if($_SESSION['uid']==''){
header('location: adminlogin.php');
echo"please login";
}

 ?>
