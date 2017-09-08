<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');
class user extends dbConnect
{
  function dispuser()
  {
    $a=$_SESSION['uid'];
    $b=$_SESSION['uemail'];
    $c=$_SESSION['upassword'];
    $sqledit="SELECT * FROM `adminlogin` WHERE `id`= $a";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
          <div class="col-md-3">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="'.$row['name'].'" name="name" required>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
                <label>Contact</label>
                <input type="password" class="form-control" placeholder="'.$row['contact'].'" name="contact" required>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" placeholder="'.$b.'" name="email" required>
              </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="'.$c.'" name="password" required>
              </div>
          </div>

      </div>';
    }
  }

  function editProfile($name,$contact,$email,$password)
  {
    $sql1="UPDATE `studentdetails` SET `sid`='$sid', `sname`='$sname',`sgender`=$sgender, `scontact`='$scontact' WHERE `sid`=$id ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('Location: main.php?id=1');
      echo"succesful";
    }
    else {
      echo"not successful";
    }
  }
}
 ?>
