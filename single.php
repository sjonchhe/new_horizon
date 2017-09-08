<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--><?php include_once('inc_DisplayClass.php');
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ability Bootstarp Website Template | Single :: w3layouts</title>
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
<!------ light-box-script ----->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
	<!--START--FACEBOOK COMMENT-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=493838477624083";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- END--FOR FACEBOOK COMMENT-->
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
   <div class="grid_4">
		<div class="container" style="margin-top:30px";>


		    <div class="blog_grid">
		      <?php $display->singleCourseDisplay(); ?>
					<!--FOR FACEBOOK COMMENTS-->

					<div class="fb-comments" data-href="<?php echo $actual_link; ?>" data-numposts="5" data-width="1000px" style="margin-left:60px;"></div>
		   </div></div></div>
<!--
			 <div class="comment">

		  		    	<h2>Comments</h2>
		  		        	<ul class="comment-list">
		  		        	  <li><img src="images/pic12.jpg" alt="">
		  		        		 <div class="desc1">
		  		        			<h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
		  		        			<div class="extra">
					                  <time pubdate="" datetime="2014-03-30T14:47:59">
						                 Submitted by admin on January 30, 2014 - 14:47					</time>
					                </div>
			                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent</p>
			                        <div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
		  		        		   </div>
		  		        		   <div class="clearfix"></div>
		  		        		</li>
		  		        	</ul>
		  </div>
		  <div class="comments-area">
		  		        	<h3>Add New Comment</h3>
							<form>
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Website</label>
									<input type="text" value="">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea></textarea>
								</p>
								<p>
									<label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Submit Comment"></label>
								</p>
							</form>
		    </div>
		</div>
	</div>-->
	<?php include_once('footer.php') ?>
</body>
</html>
