<?php

@session_start();
if($_SESSION['tid']==''){
header('location: teacherlogin.php');
echo"please login";
}

 ?>
