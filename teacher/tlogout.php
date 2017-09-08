<?php
session_start();
//$q=$_GET['q'];
include_once('class/class.teacher.php');
$teacher= new teacher;

$teacher->lastLogin();
 $_SESSION['login']= FALSE;
 session_destroy();
 header("Location: index.php");

 ?>
