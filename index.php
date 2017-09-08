
<!DOCTYPE HTML>
<?php include_once('inc_DisplayClass.php');
$display->pageCounter(); ?>
<html>
<head>
	<title>New Horizon Nepal | Home </title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<!----font-Awesome----->
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<!----font-Awesome----->
	<!-- Custom Theme files -->
	<link href="style.css" rel='stylesheet' type='text/css' />
	<!--Material kits-->
	<link href="assets/css/material-kit.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">

<link href="css/slider.css" rel='stylesheet' type='text/css' />
<link href="css/happyslider.css" rel='stylesheet' type='text/css' />

	<!--Animation-->
	<script src="js/wow.min.js"></script>
	<link href="css/animate.css" rel='stylesheet' type='text/css' />
	<script>
	new WOW().init();
	</script>
<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script type="text/javascript" src="js/easing.js"></script>


</head>
<body>
	<!--
	<div class="header wow fadeInUpBig" data-wow-delay="0.4s">
	<div class="container">
	<div class="header_top">
	<h2>Welcome to</h2>
	<h1>New Horizons Computer Learning Centers </h1>
</div>
</div>
</div> -->
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
</div>
<div class="slidercontent" style="height:500px;overflow:hidden;">
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
	<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
							<?php $display->displaySlider();  ?>
						</ul>
					</div>
				</div>
</div>
</div>
</div></div>

</div>
<div class="grid_1">
	<div class="container" >
		<?php $display->displayHeader(); ?>
		<div class="box_2" >
			<div class="col-md-6">
				<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
					<i class="fa fa-film" > </i>
					<h4>Video Lessons</h4>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="feature wow fadeInLeft" data-wow-delay="0.4s">
					<i class="fa fa-check"> </i>
					<h4>Trusted Certifications</h4>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
					</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="box_2 wow bounce" data-wow-delay="0.4s">
			<div class="col-md-6">
				<div class="feature  wow fadeInRight" data-wow-delay="0.4s">
					<i class="fa fa-trophy"> </i>
					<h4>Expert Teachers</h4>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
					</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="feature">
					<i class="fa fa-chain"> </i>
					<h4>Expert Training</h4>
					<p>
						Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
					</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="grid_2" style="border-top:1px solid black;padding-top:110px;">
	<div class="container">
		<h3 class="head_1 wow rotateInUpLeft" data-wow-delay="0.4s">Popular Courses</h3>
		<?php $display->displayPopularCourse(); ?>

</div>
<a href="courses.php"><div class="other_courses">Other Courses</div></a>
</div>
<div class="team">
	<div class="container">
		<h3 class="head_2 wow rollIn" data-wow-delay="0.4s" style="font-weight:500;">Our team</h3>
			<div class="img-wrapper wow slideInLeft" data-wow-delay="0.4s">
				<?php $display->displayTeam(); ?>
		</div>

	</div>
</div>
<!--
<div class="grid_3">
		<div class="container">
			<h3>Our Staff</h3>
		  <div class="about-grids">
						<div class="col-sm-3 about-grid">
							<a href="images/s1.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic8.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s2.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic9.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s3.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic10.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
						<div class="col-sm-3 about-grid">
							<a href="images/s4.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="images/pic11.jpg" class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="images/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							<h4><a href="#">Duis autem</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
						</div>
				        <div class="clearfix"> </div>
	      </div>
	   </div>
	</div> -->
<div class="students wow  zoomInDown" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-md-8" >
				<h3>Happy Students</h3>


				<div class="w3layouts-slider" style="overflow:hidden;">
			<div class="container " >
				<div class="slider" >
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<?php $display->displayHappy(); ?>			<!--
							<li>
								<div class="wthree-banner-grids">
									<div class="col-md-4 agileits-banner-left">
										<address><img src="images/pic5.jpg" class="img-responsive" alt=""/></address>
									</div>
									<div class="col-md-8 agileinfo-banner-right extra-wrap">

										<p>	<i class="fa quote fa-quote-left"></i>Quisque sed lacinia diam. In nibh dui, congue a lacinia quis, egestas a erat. Nam commodo, leo vitae aliquet luctus</p>
<p class="m_2"><a href="#">-&nbsp;&nbsp; Lorem ipsum dolor sit amet</a></p>
										<div class="w3-button">

										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li>
							<li>
								<div class="wthree-banner-grids">
									<div class="col-md-4 agileits-banner-left">
										<address><img src="images/pic8.jpg" class="img-responsive" alt=""/></address>
									</div>
									<div class="col-md-8 agileinfo-banner-right extra-wrap">

										<p>	<i class="fa quote fa-quote-left"></i>Integer sit amet sapien arcu. Nam luctus sagittis dignissim. Phasellus venenatis vehicula mollis. Aliquam id neque et sem</p>
<p class="m_2"><a href="#">-&nbsp;&nbsp; Lorem ipsum dolor sit amet</a></p>
										<div class="w3-button">

										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</li> -->
						</ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
							// Slideshow 4
							$("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
								$('.events').append("<li>before event fired.</li>");
							},
							after: function () {
								$('.events').append("<li>after event fired.</li>");
							}
							});

						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-4">
			<a href="http://learningcatalog.newhorizons.com/?_ga=2.94951580.1095806659.1495086428-233672274.1495017492" target="_blank"><img src="gallery/book.png" style="height:500px;"></a>
		</div>
	</div>
</div>
</div>
<?php include('footer.php') ?>
</body>
</html>
