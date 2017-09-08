<?php
include_once('aptech.dbConnect.php');
class display extends dbConnect
{
  public function userComment($name,$email,$subject,$message)
  {
    $sql="INSERT INTO contact SET cname='$name',cemail='$email',csubject='$subject',cmessage='$message'";
    mysqli_query($this->db,$sql);
  }
  public function aboutinfo()
  {
  $sql="SELECT * FROM `aboutandcontact` ";
  $result=(mysqli_query($this->db,$sql));
  while($row=mysqli_fetch_array($result))
  {
    echo'
    <div class="col-sm-6 box_3">
      <p>'.$row['firstabout'].'</p>
    </div>
    <div class="col-sm-6 box_3">
      <p>'.$row['secondabout'].'</p>
    </div>';
  }
  }

  public function showContactinfo()
  {
  $sql="SELECT * FROM `aboutandcontact` ";
  $result=(mysqli_query($this->db,$sql));
  while($row=mysqli_fetch_array($result))
  {
    echo'
    <p>'.$row['firstcontact'].'</p>
    <p>'.$row['secondcontact'].'</p>';
  }
  }


  public function pageCounter()
  {
    $sql="UPDATE `page` SET `pageview`=(pageview) +1";
    mysqli_query($this->db,$sql);
  }
  public function displaypageCounter()
  {
    $sql="SELECT * FROM `page`";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
      echo $row['pageview'];
    }
  }

  public function displayHappy()
  {
    $sql="SELECT * FROM `happystudents` ";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))

    {
      $a="gallery/happy/";
      echo"
      <li>
        <div class='wthree-banner-grids'>
          <div class='col-md-4 agileits-banner-left'>
            <address><img src='$a".$row['himagename'].".".$row['himageextension']."' class='img-responsive' alt=''/></address>
          </div>
          <div class='col-md-8 agileinfo-banner-right extra-wrap'>

            <p>	<i class='fa quote fa-quote-left'></i>".$row['hcomment']."</p>
            <p class='m_2'><a href='#'>-&nbsp;&nbsp;  ".$row['hname']."</a></p>
            <div class='w3-button'>

            </div>
          </div>
          <div class='clearfix'> </div>
        </div>
      </li>";

    }
  }

  public function displayPopularCourse()
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
      <a href="single.php?id='.$row["cid"].'"><img src='.$a.''.$row['cimagename'].".".$row['cimageexten'].' class="img-responsive" style="height:220px;width:450px;" alt=""/></a>
      <div class="desc">
      <h4>'.$row['cname'].'</h4>
      <p>'.$row['cheader'].'</p>
      <div class="more"><a href="single.php?id='.$row["cid"].'"><img src="images/more.png" alt=""></a></div>
      </div>
      </div>
      ';
    }
  }

  /*FOR DISPLAYING COURSES LIST IN SEPARATE page*/
  public function displayCourse()
  {
    $sql="SELECT * FROM `course` ORDER BY `counter` DESC  ";
    $result=(mysqli_query($this->db,$sql));
    $count=0;

    while($row=mysqli_fetch_array($result))
    {

      $a='gallery/';

      echo'
      <div class="blog_grid " >
      <div class="col-md-4 blog_box" style="margin-bottom:20px;">
         <a href="single.php?id='.$row["cid"].'" ><img src='.$a.''.$row['cimagename'].".".$row['cimageexten'].' alt="image" class="img-responsive zoom-img" alt=""/></a>
       <h3><a href="single.php?id='.$row["cid"].'">'.$row["cname"].'</a></h3>

       <p>'.$row["cheader"].'</p>
         <a href="single.php?id='.$row["cid"].'" class="btn btn-warning">Read More</a>
      </div>
   </div>

      ';
    }
    echo ' <div class="clearfix"> </div>
		   </div>';

  }
  /*FOR DISPLAYING SINGLE Course ON CLICK AND OPENING IT IN NEW PAGE*/
public function singleCourseDisplay(){
$id=$_GET['id'];
    $sql3="SELECT * from course WHERE cstatus=1 and cid='$id'";
    $result = mysqli_query($this->db,$sql3);



        while($row=mysqli_fetch_array($result)) {


           echo '

	<h1 class="blog_head">'.$row["cname"].'</h1>
<div class="blog_box">
  <a href="single.html" class="mask"><img src="gallery/'.$row["cimagename"].'.jpg" alt="image" class="img-responsive zoom-img" alt=""/ style="width:80%;margin-left:auto;margin-right:auto;height:500px;"></a>
<h3><a href="single.html">'.$row['cname'].'</a></h3>

<p>'.$row["clong"].'</p>
</div>



';

        }
        echo '<div class="clearfix"></div>
';

    }
  function displayHeader()
  {
    $sql="SELECT * FROM startingtext";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
      echo'
      <div class="box_1  wow fadeInUpBig" data-wow-delay="0.4s">
  			<h3>'.$row['header'].'</h3>
  			<p>'.$row['body'].'</p>
  		</div>';
    }
  }

  public function showHeaders()
{
  $sql="SELECT * FROM menu";
  $result=mysqli_query($this->db,$sql);
echo '
  <div class="fixed-header">
    <div class="logo wow bounceInDown nhlogo" data-wow-delay="0.4s" >
      <a href="index.html">
        <img src="gallery/nhlogo.png" class="newlogo">
      </a>
    </div>
    <div class="top-nav wow bounce" data-wow-delay="0.4s">
      <span class="menu"> </span>
      <ul>';


  while($row=mysqli_fetch_array($result))
  {
    echo'
    <li><a href="'.$row['firstaddress'].'">'.$row['first'].'</a></li>
    <li><a href="'.$row['secondaddress'].'">'.$row['second'].'</a></li>

    <li><a href="'.$row['thirdaddress'].'">'.$row['third'].'</a></li>

    <li><a href="'.$row['fourthaddress'].'">'.$row['fourth'].'</a></li>';
  }
  echo '
    </ul>

  </div>
  <div class="clearfix"> </div>
</div>';
}
public function showFooters()
{
$sql="SELECT * FROM menu";
$result=mysqli_query($this->db,$sql);
echo '
';


while($row=mysqli_fetch_array($result))
{
  echo'
  <li><a href="'.$row['firstaddress'].'">'.$row['first'].'</a></li>
  <li><a href="'.$row['secondaddress'].'">'.$row['second'].'</a></li>

  <li><a href="'.$row['thirdaddress'].'">'.$row['third'].'</a></li>

  <li><a href="'.$row['fourthaddress'].'">'.$row['fourth'].'</a></li>';
}
echo '
  </ul>


</div>';
}
  public function displaySlider()
  {
    $sql="SELECT * FROM `slider`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))

    {
      $a="gallery/slider/";
      echo"<li>
        <img src='$a".$row['simagename']."'>
      </li>";
    }
  }

  public function displayTeam() //Displays team in index
  {
    $sql="SELECT * FROM `teacherdetails` ORDER BY tid LIMIT 0,5";
    $result=(mysqli_query($this->db,$sql));

    while($row=mysqli_fetch_array($result))
    {
      $a='gallery/teacher/'.$row['timage'];

	echo' <a href="about.php"><img src="'.$a.'" class="img-responsive" alt="" style="margin:20px;" />

      <span style="color:white;font-size:20px;">'.$row["tfname"].$row["tlname"].'</span><br>
<span style="color:white;font-size:15px;text-transform:uppercase;">'.$row["tcourse"].'</span>
      </a>';

    }
  }
  /*FOR DISPLAYING TEAM MEMBERS IN ABOUT PAGE*/
    public function displayFullTeam() //Displays team in index
    {
      $sql="SELECT * FROM `teacherdetails`";
      $result=(mysqli_query($this->db,$sql));

      while($row=mysqli_fetch_array($result))
      {
        $a='gallery/teacher/'.$row['timage'];

  	echo'
    <div class="col-sm-3 about-grid" style="color:white;">

        <div class="view view-first">
                      <img src="gallery/teacher/'.$row["timage"].'" class="img-responsive" style="height:250px;width:250px;" alt=""/>

                     </div>

      <h4>'.$row['tfname'].$row['tlname'].'</h4>
      <h5>'.$row['tcourse'].'</h5>
      <p>Qualification:<br></p>
    </div>

    ';

      }
    }

}
?>
