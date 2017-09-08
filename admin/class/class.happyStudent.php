<?php
include_once('aptech.dbConnect.php');
class happy extends dbConnect
{
  public function displayHappy()
  {
    $sql="SELECT * FROM `happystudents`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {   $a='../gallery/happy/';
      echo'
      <tr>
      <td>'.$row['hid'].'</td>
      <td>'.$row['hname'].'</td>
      <td>'.$row['hcomment'].'</td>

      <td>'.$row['himagename'].'</td>
      <td>'.$row['himageextension'].'</td>

      <td><img src='.$a.''.$row['himagename'].".".$row['himageextension'].' height=100 width=100></td>

      <td class="td-actions text-right">
      <a href="main.php?id=happy&h=hedit&hid='.$row["hid"].'"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
      <i class="fa fa-edit"></i>
      </button> </a>
      <a href="main.php?id=happy&h=hdelete&hid='.$row["hid"].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
      <i class="fa fa-times"></i>
      </button> </a>
      </td>
      </tr>';
    }
  }

  public function edithappy($id)
  {
    $sqledit="SELECT * FROM `happystudents` WHERE `hid`= $id";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {
      $hid=$row['hid'];
      $hname=$row['hname'];
      $hcomment=$row['hcomment'];
      $himagename=$row['himagename'];
      $himageextension=$row['himageextension'];

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
      <form method="post" action="main.php?id=happy&h=happy">

      <div class="row">
      <div class="col-md-2">
      <div class="form-group">
      <label>Happy ID</label>
      <input type="text" class="form-control" value="'.$hid.'" name="hid">
      </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control" value="'.$hname.'" name="hname">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Student Comment</label>
      <input type="text" class="form-control" value="'.$hcomment.'" name="hcomment">
      </div>
      </div>


      <div class="col-md-4">
      <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control" value="'.$himagename.'" name="himagename">
      </div>
      </div>


      <div class="col-md-4">
      <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control" value="'.$himageextension.'" name="himageextension">
      </div>
      </div>


      </div>

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

  public function happyEdit($hid,$hname,$hcomment,$himagename,$himageextension)
  {
    $sql1="UPDATE `happystudents` SET `hid`='$hid', `hname`='$hname',`hcomment`='$hcomment', `himagename`='$himagename',`himageextension`='$himageextension' WHERE `hid`=$hid";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('Location: main.php?id=5');
      echo"succesful";
    }
    else {
      echo"not successful";
    }
  }

  public function happyForm()
  {
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
    <form method="post" action="main.php?id=happy&h=happyadd">

    <div class="row">
    <div class="col-md-2">
    <div class="form-group">
    <label>Happy ID</label>
    <input type="text" class="form-control"  name="hid">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label>Student Name</label>
    <input type="text" class="form-control"  name="hname">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Student Comment</label>
    <input type="text" class="form-control"  name="hcomment">
    </div>
    </div>


    <div class="col-md-4">
    <div class="form-group">
    <label>Image Name</label>
    <input type="text" class="form-control" name="himagename">
    </div>
    </div>


    <div class="col-md-4">
    <div class="form-group">
    <label>Image Extension</label>
    <input type="text" class="form-control"  name="himageextension">
    </div>
    </div>


    </div>

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
  public function happyAdd($hid,$hname,$hcomment,$himagename,$himageextension)
  {
    $sql0="SELECT * from happystudents WHERE hid=$hid";
    $result0= mysqli_query($this->db,$sql0);
    $user_data0=mysqli_fetch_array($result0);
    $count_row0=$result0->num_rows;

    if($count_row0==0)
    {
      $sql1="INSERT INTO happystudents SET hid=$hid,hname='$hname',hcomment='$hcomment',himagename='$himagename',himageextension='$himageextension'";
      $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
      if($result)
      {
        header('Location: main.php?id=5');
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

  public function deleteHappy($id)
  {
    $sqldel="DELETE  FROM happystudents WHERE hid=$id";
    $result=mysqli_query($this->db,$sqldel);
    if($result)
    {
      header('location: main.php?id=5');
    }
    else
    {
      echo"Something Wrong here yes!";

    }
  }

  public function displayOutHappy()
  {
    $sql="SELECT * FROM `happystudents` where hid=2";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))

    {
       $a="../APtech/gallery/happy/";
      echo"
        <div class='custom_testimonials_wrap_inner'>
  				<address><img src='$a".$row['himagename'].".".$row['himageextension']."' style='height:250px;width:250px;'></address>
  				<div class='extra-wrap'>
  				<i class='fa quote fa-quote-left'></i>
  				<p>".$row['hcomment']."</p>
  				<p class='m_2'><a href='#'>-&nbsp;&nbsp; ".$row['hname']."</a></p>
  				</div>
  				<div class='clearfix'></div>
  			";
    }
  }
}
?>
