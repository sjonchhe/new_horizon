<?php
//include('class/aptech.dbConnect.php');
ob_start();
include('class/class.Student.php');
include('class/class.Course.php');
include('class/class.happyStudent.php');
include('class/class.user.php');
include('class/class.admin.php');
include('class/class.headerpage.php');
$std= new Student;
$cs= new Course;
$hs= new happy;
$user= new user;
$admin= new admin;

$header= new header;
?>
