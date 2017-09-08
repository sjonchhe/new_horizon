<?php
include_once('inc_Tsession.php');
include_once('aptech.dbConnect.php');

class teacher extends dbConnect
{

  function teacherLogin($name,$password)
  {
    $sql1="SELECT * FROM `teacherlogin` WHERE `tusername`='$name'  AND `tpassword`='$password'";
    $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
    $row=mysqli_num_rows($result);
    if($row>=1)
    {
      while($inthis=mysqli_fetch_array($result))
      {
        header('Location: teacher.php?id=1');
        $_SESSION['login']=true;
        $_SESSION['tname']=$inthis['tfname'];
        $_SESSION['tid']=$inthis['tid'];
        $_SESSION['tpassword']=$inthis['tpassword'];
        $_SESSION['tusername']=$inthis['tusername'];
        echo"Logged IN";
        teacher::lastLogin(); /*
        ini_set("date.timezone", "Asia/Kathmandu");
        $a=date("Y-m-d h:i:s");
        $b=date("a");
        $sql2="UPDATE `teacherlogin` SET `tlastlogin`='$a',`time`='$b' WHERE `tid`='$_SESSION[tid]'";
        $result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."data cannot be inserted"); */

      }
    }
    else
    {
      echo"Wrong email or password";
    }
  }

  function dispuser()
  {
    $a=$_SESSION['tid'];
    $b=$_SESSION['tusername'];
    $c=$_SESSION['tpassword'];
    $sqledit="SELECT * FROM `teacherlogin` WHERE `tid`= $a";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" value="'.$row['tusername'].'" name="name" required>
              </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" value="'.$row['tpassword'].'" name="password" required>
              </div>
          </div>
         <input type="hidden" value="'.$a.'" name="id">
      </div>';
    }
  }

  function editProfile($id,$name,$password)
  {
    $sql1="UPDATE `teacherlogin` SET  `tusername`='$name',`tpassword`='$password' WHERE `tid`=$id";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      $_SESSION['tusername']=$name;

      $_SESSION['tpassword']=$password;


      header('Location: teacher.php?id=2');
      echo"succesful";
    }
    else {
      echo"not successful";
    }
  }

  function lastLogin()
  {
    ini_set("date.timezone", "Asia/Kathmandu");
    $a=date("Y-m-d h:i:s");
    $b=date("a");
    $sql2="UPDATE `teacherlogin` SET `tlastlogin`='$a',`time`='$b' WHERE `tid`='$_SESSION[tid]'";
    $result=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."data cannot be inserted");

  }

  function storeUploads($name,$extension)
  {
    ini_set("date.timezone", "Asia/Kathmandu");
    $a=date("Y-m-d h:i:s");
    $b=date("a");
    $c=$_SESSION['tid'];
    $sql1="INSERT INTO `teacheruploads` SET `tid`='$c',`fname`='$name', `fextension`='$extension', `date`='$a', `time`='$b'";
    $result=mysqli_query($this->db,$sql1);

  }

  function showuploads()
  {

    $c=$_SESSION['tid'];
    $sql1="SELECT * FROM `teacheruploads` WHERE `tid`='$c'";
    $result=mysqli_query($this->db,$sql1);
    while($row=mysqli_fetch_array($result))
    {
    }

  }

}
?>
