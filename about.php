<!DOCTYPE HTML>
<?php include_once('inc_DisplayClass.php');
$display->pageCounter(); ?>
<html>
<head>
<title>About</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
</head>
<body>
	<div class="header-home">

								<?php $display->showHeaders(); ?>
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
		</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
	<div class="grid_1">
	   <div class="container">
		  <div class="box_1">
			<h3>Who we are</h3>
		  </div>
		  <div class="col-md-12 about_banner"><img src="gallery/abc.png" class="img-responsive" alt="" style="height:400px;margin:auto;"/></div>
		  <div class="box_20">
				<?php $display-> aboutinfo(); ?>

		      <div class="clearfix"> </div>
		  </div>
	   </div>
	</div>
	<div class="grid_3">
		<div class="container">
			<h3>Our Staff</h3>
		  <div
					<?php $display->displayFullTeam(); ?>

				        <div class="clearfix"> </div>
	      </div>
	   </div>
	</div>
	<div class="advantages">
		<div class="container">
			<div class="col-md-6">
				<h3 class="m_3">Advantages</h3>
				<div class="feature about_box1">
	                   <i class="fa fa-globe"> </i>
	                   <h4>Ut wisi enim ad minim</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
	            <div class="feature about_box1">
	                   <i class="fa fa-heart"> </i>
	                   <h4>Claritas est etiam processus</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
	            <div class="feature">
	                   <i class="fa fa-gears"> </i>
	                   <h4>Mirum est notare quam</h4>
	                    <p>
	                        Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
	                    </p>
	            </div>
			</div>
			<div class="col-md-6">
				<h3 class="m_3">Testimonials</h3>
				<ul class="about_box span_1">
				  <li class="box_img"><img src="images/pic9.jpg" class="img-responsive" alt=""/></li>
				  <li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>
				  <h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>
				  <div class="clearfix"> </div>
				</ul>
				<ul class="about_box span_1">
				  <li class="box_img"><img src="images/pic9.jpg" class="img-responsive" alt=""/></li>
				  <li class="box_desc">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</li>
				  <h4>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h4>
				  <div class="clearfix"> </div>
				</ul>
			</div>
		</div>
	</div>
   <div class="footer">
		<div class="container">
		  <div class="footer_top">
			<div class="col-sm-3">
			   <ul class="list1">
			   	<h3>Browse</h3>
			   	 <li><a href="#">Prices</a></li>
			   	 <li><a href="#">Courses</a></li>
			   	 <li><a href="#">Blog</a></li>
			     <li><a href="#">Contacts</a></li>
			   </ul>
			</div>
			<div class="col-sm-3">
			  <ul class="list1">
			    <h3>Next Courses</h3>
			   	 <li><a href="#">Biology</a></li>
			   	 <li><a href="#">Management</a></li>
			   	 <li><a href="#">History</a></li>
			   	 <li><a href="#">Literature</a></li>
			  </ul>
			</div>
			<div class="col-sm-3">
			  <ul class="list1">
			  	<h3>About Learn</h3>
			   	 <li><a href="#">About Us</a></li>
			   	 <li><a href="#">Apply</a></li>
			   	 <li><a href="#">Terms and Conditions</a></li>
			   	 <li><a href="#">Register</a></li>
			  </ul>
			</div>
			<div class="col-sm-3">
			  <ul class="socials">
                 <li><a href="#"><i class="fa fb fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa tw fa-twitter"></i></a></li>
              </ul>
              <ul class="list2">
				<li><strong class="phone">+0018 58287 58</strong><br><small>Mon - Fri / 9.00AM - 06.00PM</small></li>
				<li>Questions? <a href="malito:mail@demolink.org">mail(at)ability.com</a></li>
			  </ul>
			</div>
			<div class="clearfix"> </div>
		   </div>
		 </div>
	</div>
	<div class="copy">
	    <p>&copy; 2017 Design by <a href="#" target="_blank">Abhash & Sandesh	</a></p>
    </div>
</body>
</html>
