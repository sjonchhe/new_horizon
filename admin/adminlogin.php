<!DOCTYPE html>
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
    {
	  extract($_POST);
      include_once('class/class.admin.php');
      $admin=new admin();
      if($hidden==1)
      {
	    $admin->adminLogin($name,$password);
      }
      else {
        //$std->studentCheck($userid,$name,$username,$useremail,$userpassword);
      }
    }
 ?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>



      <link rel="stylesheet" href="css/admin.css">


</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
        <input type="hidden" name="hidden" value=0/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="">
      <input type="text" placeholder="username" name="name"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="hidden" name="hidden" value=1/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
