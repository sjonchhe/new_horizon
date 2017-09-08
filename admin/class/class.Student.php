<?php
include_once('aptech.dbConnect.php');
//include_once('inc_session.php');
class Student extends dbConnect
{
  function studentCheck($sid,$name,$sname,$semail,$spassword)
  {
    $sql1="SELECT * FROM `studentdetails` WHERE `sid`=$sid AND `sname`='$name'";
    $result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted here");
    $row1= mysqli_num_rows($result1);

    if($row1==1)
    {
      $sql2="SELECT * FROM `studentlogin` WHERE `sname`='$sname' OR `semail`='$semail' OR `Loginid`=$sid";
      $result2=mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."data cannot be inserted");
      $row2=mysqli_num_rows($result2);
      if($row2 >=1)
      {
        echo"That name or email is already taken Or your ID is invalid";
      }
      else{
        $sql3="INSERT INTO `studentlogin` SET `Loginid`=$sid,`sname`='$sname', `semail`='$semail', `spassword`='$spassword'";
        $result3=mysqli_query($this->db,$sql3) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result3)
        {
          echo"your account is successfully created";

        }
      }

    }
    else {
      echo"You have to be a student at aptech";
    }
  }
  /*function studentSignup($sid,$sname,$semail,$spassword)
  {
  $sql1="INSERT INTO `studentlogin` SET `sid`='$sid',`sname`='$sname',`semail`=$semail,`spassword`=$spassword";
  $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
  if($result)
  {
  echo"data inserted";
  header('Location: index.php');
}
}
*/

function studentLogin($semail,$spassword)
{
  $sql1="SELECT * FROM `studentlogin` WHERE `sname`='$semail' AND `spassword`='$spassword'";
  $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
  $row=mysqli_num_rows($result);
  if($row>=1)
  {
    /*  $_SESSION['login']=TRUE;
    $_SESSION['uid']=$row['Loginid'];
    $_SESSION['uname']=($row['sname']);*/

    header('Location: dashboard1.php');
    echo"Logged IN";

  }
  else
  {
    echo"Wrong email or password";
  }
}

function displayLogin()
{
  $sql="SELECT * FROM `studentlogin`";
  $result=(mysqli_query($this->db,$sql));
  while($row=mysqli_fetch_array($result))
  {
    echo'
    <tr>
    <td>'.$row['Loginid'].'</td>
    <td>'.$row['sname'].'</td>
    <td>'.$row['semail'].'</td>
    <td>'.$row['spassword'].'</td>

    <td class="td-actions text-right">
    <a href="editdeletestudentlogin.php?q=profile&id='.$row["Loginid"].'"><button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
    <i class="fa fa-user"></i>
    </button> </a>

    <a href="editdeletestudentlogin.php?q=edit&id='.$row["Loginid"].'"> <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
    <i class="fa fa-edit"></i>
    </button> </a>
    <a href="editdeletestudentlogin.php?q=delete&id='.$row["Loginid"].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
    <i class="fa fa-times"></i> </a>
    </button>
    </td>
    </tr>';
  }
}

function displayStudentDetails()
{
  $sql="SELECT * FROM `studentdetails`";
  $result=(mysqli_query($this->db,$sql));

  while($row=mysqli_fetch_array($result))
  {
    if($row['sgender'] == 1)
    {
      $g="Male";
    }
    else
    {
      $g="Female";
    }

    echo'
    <tr>
    <td>'.$row['sid'].'</td>
    <td>'.$row['sname'].'</td>
    <td>'.$g.'</td>
    <td>'.$row['scontact'].'</td>

    <td class="td-actions text-right">

    <a href="main.php?id=studentdetails&q=edit&sid='.$row['sid'].'"> <button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
    <i class="fa fa-edit"></i>
    </button></a>

    <a href="main.php?id=studentdetails&q=delete&sid='.$row['sid'].'"> <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
    <i class="fa fa-times"></i>
    </button></a>
    </td>
    </tr>';
  }
}

public function deleteStudentdetails($id)
{
  $sqldel="DELETE  FROM studentdetails WHERE sid=$id";
  $result=mysqli_query($this->db,$sqldel);
  if($result)
  {
    header('location: main.php?id=1');
  }
  else
  {
    echo"Something Wrong here yes!";

  }
}



function editStudentdetails($id)
{
  $sqledit="SELECT * FROM `studentdetails` WHERE `sid`= $id";
  $result=mysqli_query($this->db,$sqledit);
  while($row=mysqli_fetch_array($result))
  {
    $id=$row['sid'];
    $sid=$row['sid'];
    $sname=$row['sname'];
    $sgender=$row['sgender'];
    $scontact=$row['scontact'];
    echo'
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
    <div class="card">
    <div class="header">
    <h4 class="title">Edit Profile</h4>
    </div>
    <div class="content">
    <form method="post" action="main.php?id=studentdetails&q=studentdetails&sid='.$id.'">
    <div class="row">
    <div class="col-md-2">
    <div class="form-group">
    <label>Student ID</label>
    <input type="text" class="form-control" value="'.$sid.'" name="sid">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label>Student Name</label>
    <input type="text" class="form-control" value="'.$sname.'" name="sname">
    </div>
    </div>
    <div class="col-md-2">
    <div class="form-group">
    <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="sgender">
    <option value="1">Male</option>
    <option value="0">Female</option>

  </select>
    </div>
    </div>
    <div class="col-md-3">
    <div class="form-group">
    <label>Student Contact</label>
    <input type="text" class="form-control" value="'.$scontact.'" name="scontact">
    </div>
    </div>


    </div>
    <input type="hidden" name="id" value="'.$id.'">
    <button type="submit" class="btn btn-info btn-fill pull-right">Edit Details</button>
    <div class="clearfix"></div>


    </form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>';
  }
}

public function studentEdit($id,$sid,$sname,$sgender,$scontact)
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

public function deleteStudentlogin($id)
{
  $sqldel="DELETE  FROM studentlogin WHERE Loginid=$id";
  $result=mysqli_query($this->db,$sqldel);
  if($result)
  {
    header('location: dashboard1.php');
  }
  else
  {
    echo"Something Wrong here yes!";

  }
}

public function editStudentlogin($id)
{
  $sqledit="SELECT * FROM `studentlogin` WHERE `Loginid`= $id";
  $result=mysqli_query($this->db,$sqledit);
  while($row=mysqli_fetch_array($result))
  {

    $id=$row['Loginid'];
    $sname=$row['sname'];
    $semail=$row['semail'];
    $spassword=$row['spassword'];

    echo"
    <table>
    <tr><td>Sdit Form</td></tr>
    <form method='post' action='editdeletestudentlogin.php?q=edit&id=".$id."'>
    <tr>
    <td>ID</td>
    <td><input type ='text'name='sid' value=$id required></td>
    </tr>

    <tr>
    <td>Name</td>
    <td><input type ='text'name='sname' value=$sname required></td>
    </tr>

    <tr>
    <td>Email</td>
    <td><input type ='text'name='semail' value=$semail required></td>
    </tr>

    <tr>
    <td>Password</td>
    <td><input type ='text'name='spassword' value=$spassword required></td>
    </tr>
    <tr>
    <td>
    <input type='submit' value='Edit' >
    </td>
    </tr>
    </form>
    </tr>
    </table>";
  }
}
public function studentLoginEdit($id,$sname,$semail,$spassword) //edit student login
{
  $sql1="UPDATE `studentlogin` SET `Loginid`='$id', `sname`='$sname',`semail`='$semail', `spassword`='$spassword' WHERE `Loginid`=$id ";
  $result=mysqli_query($this->db,$sql1);
  if($result)
  {
    header('Location: dashboard1.php');
    echo"succesful";
  }
  else {
    echo"not successful";
  }
}

public function studentForm()
{
  echo'
  <div class="content">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
  <div class="card">
  <div class="header">
  <h4 class="title">Edit Profile</h4>
  </div>
  <div class="content">
  <form method="post" action="main.php?id=addstudent&q=finaladdstudent">
  <div class="row">
  <div class="col-md-2">
  <div class="form-group">
  <label>Student ID</label>
  <input type="text" class="form-control"  name="sid">
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
  <label>Student Name</label>
  <input type="text" class="form-control" name="sname">
  </div>
  </div>
  <div class="col-md-2">
  <div class="form-group">
  <label>Student Gender</label>


  <input type="radio" name="sgender" value="1" checked>
  Male
  <input type="radio" name="sgender" value="0">
  Female

  </div>
  </div>
  <div class="col-md-3">
  <div class="form-group">
  <label>Student Contact</label>
  <input type="text" class="form-control"  name="scontact">
  </div>
  </div>


  </div>
  <input type="hidden" name="id" value="">
  <button type="submit" class="btn btn-info btn-fill pull-right">Add</button>
  <div class="clearfix"></div>


  </form>
  </div>
  </div>
  </div>

  </div>
  </div>
  </div>';
}


public function addstudents($sid,$sname,$sgender,$scontact)
{
  $sql0="SELECT * from studentdetails WHERE sid=$sid";
  $result0= mysqli_query($this->db,$sql0);
  $user_data0=mysqli_fetch_array($result0);
  $count_row0=$result0->num_rows;

  if($count_row0==0)
  {
    $sql1="INSERT INTO studentdetails SET sid=$sid,sname='$sname',sgender='$sgender',scontact='$scontact'";
    $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
    if($result)
    {
      header('Location: main.php?id=1');
      echo"data inserted";
    }
    else {
      echo"ID already exists";
    }
  }
  else {
    echo"ID already exists";
  }


}
}
?>
