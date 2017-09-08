<?php
include_once('aptech.dbConnect.php');
class course extends dbConnect
{
 public function displayCourse()
 {
   $sql="SELECT * FROM `course`";
   $result=(mysqli_query($this->db,$sql));
   while($row=mysqli_fetch_array($result))
   {   $a='gallery/';
     echo'
     <tr>
     <td>'.$row['cid'].'</td>
     <td>'.$row['cname'].'</td>
     <td>'.$row['cheader'].'</td>
     <td>'.$row['clong'].'</td>
     <td>'.$row['cimagename'].'</td>
     <td>'.$row['cimageexten'].'</td>
      <td>'.$row['cstatus'].'</td>
       <td>'.$row['counter'].'</td>

  <td><img src='.$a.''.$row['cimagename'].".".$row['cimageexten'].' height=100 width=100></td>

     <td class="td-actions text-right">
     <a href="main.php?id=courses&c=cedit&cid='.$row['cid'].'"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
     <i class="fa fa-edit"></i>
     </button> </a>
     <a href="main.php?id=courses&c=cdelete&cid='.$row['cid'].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
     <i class="fa fa-times"></i>
     </button> </a>
     </td>
     </tr>';
   }
  }

  public function editCourse($cid)
  {
    $sqledit="SELECT * FROM `course` WHERE `cid`= $cid";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {
      $cid=$row['cid'];
      $cname=$row['cname'];
      $cheader=$row['cheader'];
      $clong=$row['clong'];
      $cimagename=$row['cimagename'];
      $cimageexten=$row['cimageexten'];
      $counter=$row['counter'];
        $cstatus=$row['cstatus'];
        if($cstatus==1)
        {
          $a=1;
          @$b=Show;
          $c=0;
          @$d=Dont;
        }
        else {
          $a=0;
          @$b=Dont;
          $c=1;
          @$d=Show;
        }
      echo'
      <div class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-8">
      <div class="card">
      <div class="header">
      <h4 class="title">Edit Course</h4>
      </div>
      <div class="content">
      <form method="post" action="main.php?id=courses&c=courses&cid='.$cid.'">
      <div class="row">
      <div class="col-md-4">
      <div class="form-group">
      <label>Course ID</label>
      <input type="text" class="form-control" value="'.$cid.'" name="cid">
      </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
      <label>Course Name</label>
      <input type="text" class="form-control" value="'.$cname.'" name="cname">
      </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
      <label>Course Header</label>
      <input type="text" class="form-control" value="'.$cheader.'" name="cheader">
      </div>
      </div>
      <div class="col-md-12">
      <div class="form-group">
      <label>Course Long</label>
      <input type="text" class="form-control" value="'.$clong.'" name="clong">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Image Name</label>
      <input type="text" class="form-control" value="'.$cimagename.'" name="cimagename">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Image Extension</label>
      <input type="text" class="form-control" value="'.$cimageexten.'" name="cimageexten">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Counter</label>
      <input type="text" class="form-control" value="'.$counter.'" name="counter">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
    <label for="sel1">Visibility</label>
  <select class="form-control" id="sel1" name="cstatus">

    <option value="'.$a.'">'.$b.'</option>
    <option value="'.$c.'">'.$d.'</option>

  </select>
  </div>
  </div>

      </div>
      <input type="hidden" name="id" value="'.$cid.'">
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

  public function courseEdit($cid,$cname,$cheader,$clong,$cimagename,$cimageexten,$cstatus,$counter)
  {
    $sql1="UPDATE `course` SET `cid`='$cid', `cname`='$cname',`cheader`='$cheader', `cimagename`='$cimagename',`cimageexten`='$cimageexten',`cstatus`='$cstatus',`counter`='$counter' WHERE `cid`=$cid ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('Location: main.php?id=3');
      echo"succesful";
    }
    else {
      echo"not successful";
    }
  }

  public function courseForm()
  {
    echo'
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
    <div class="card">
    <div class="header">
    <h4 class="title">Add Course</h4>
    </div>
    <div class="content">
    <form method="post" action="main.php?id=courses&c=courseadd&cid=caddd">
    <div class="row">
    <div class="col-md-4">
    <div class="form-group">
    <label>Course ID</label>
    <input type="text" class="form-control" name="cid">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label>Course Name</label>
    <input type="text" class="form-control"  name="cname">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label>Course Header</label>
    <input type="text" class="form-control"  name="cheader">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label>Course Long</label>
    <input type="text" class="form-control"  name="clong">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Image Name</label>
    <input type="text" class="form-control" name="cimagename">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Image Extension</label>
    <input type="text" class="form-control"  name="cimageexten">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Counter</label>
    <input type="text" class="form-control"  name="counter">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
  <label for="sel1">Visibility</label>
<select class="form-control" id="sel1" name="cstatus">

  <option value="1">Show</option>
  <option value="0">Dont</option>

</select>
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
  public function courseAdd($cid,$cname,$cheader,$clong,$cimagename,$cimageexten,$cstatus,$counter)
  {
    $sql0="SELECT * from course WHERE cid=$cid";
    $result0= mysqli_query($this->db,$sql0);
    $user_data0=mysqli_fetch_array($result0);
    $count_row0=$result0->num_rows;

    if($count_row0==0)
    {
      $sql1="INSERT INTO course SET cid=$cid,cname='$cname',cheader='$cheader',clong='$clong',cimagename='$cimagename',cimageexten='$cimageexten',cstatus='$cstatus',counter='$counter'";
      $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
      if($result)
      {
        header('Location: main.php?id=3');
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

  public function deleteCourse($id)
  {
    $sqldel="DELETE  FROM course WHERE cid=$id";
    $result=mysqli_query($this->db,$sqldel);
    if($result)
    {
      header('location: main.php?id=3');
    }
    else
    {
      echo"Something Wrong here yes!";

    }
  }

  public function displayoutpopCourse()
  {
    $sql="SELECT * FROM `course` ORDER BY `counter` DESC LIMIT 0,3 ";
    $result=(mysqli_query($this->db,$sql));
    $count=0;

    while($row=mysqli_fetch_array($result))
    {
      $count=$count+1 ;
      $a='gallery/';
      switch($count)
      {
        case '1':
        {
          $anime="rotateInDownLeft";
          break;
        }
        case '2':
        {
          $anime="lightSpeedIn";
          break;
        }
        case '3':
        {
          $anime="rotateIn";
          break;
        }
        default:
        {
          echo"error";
          break;
        }
      }
      echo'

   <div class="col-md-4 box_6 wow '.$anime.' " data-wow-delay="0.4s">
     <img src='.$a.''.$row['cimagename'].".".$row['cimageexten'].' class="img-responsive" style="height:220px;width:450px;" alt=""/>
     <div class="desc">
       <h4>'.$row['cname'].'</h4>
       <p>'.$row['cheader'].'</p>
       <div class="more"><a href="#"><img src="images/more.png" alt=""></a></div>
     </div>
   </div>
      ';
    }
   }
}
?>
