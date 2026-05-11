<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Alumni System || Home Page</title>

<link rel="stylesheet" type="text/css" href="styles_1/bootstrap4/bootstrap.min.css">
<link href="plugins-1/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins_1/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins_1/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins_1/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles_1/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles_1/responsive.css">
<style> 
/* --- Place text at bottom of background image elegantly --- */
.home_slider_content {
    position: relative;
    height: 100%;
}

.home_slider_content .container,
.home_slider_content .row,
.home_slider_content .col {
    height: 100%;
}

.home_slider_content .col {
    display: flex;
    flex-direction: column;
    justify-content: flex-end; /* Push text to bottom */
    align-items: center;
    padding-bottom: 60px; /* Add spacing from the bottom */
    text-align: center;
}

/* Add subtle background overlay for better readability */
.home_slider_background::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.4); /* dark transparent overlay */
    z-index: 1;
}

.home_slider_content .home_slider_title,
.home_slider_content .home_slider_subtitle {
    position: relative;
    z-index: 2;
    color: #fff;
}

.home_slider_content .home_slider_title {
    font-size: 48px;
    font-weight: 700;
    line-height: 1.3;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

.home_slider_content .home_slider_subtitle {
    font-size: 24px;
    font-weight: 400;
    margin-top: 10px;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
}


</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include_once('includes/header.php');?>

	<!-- Menu -->

	
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/background.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Welcome To official Alumni Network</div>
									<div class="home_slider_subtitle">College Alumni System</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/background1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Revive the bond between the Alumni and the institution</div>
									<div class="home_slider_subtitle">Exchange professional knowledge</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/background2.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">Welcome to the Alumni Lineage!</div>
									<div class="home_slider_subtitle">On this website, you will find information about upcoming events</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	
	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Upcoming events</h2>
						<div class="section_subtitle"><p>knowledge, Innovation, Excellence</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<?php
                            
$sql="SELECT * from tblevents order by ID desc limit 6";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="admin/images/<?php echo $row->BannerImage;?>" width="400" height="200" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content">
								<div class="event_title"><a href="view-events.php?vid=<?php echo htmlentities ($row->ID);?>"><?php  echo htmlentities($row->EventTitle);?></a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php  echo $row->Schedule;?></span></div>
									
									<div class="event_text">
										<p><?php  echo substr($row->Description,0,50);?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><?php $cnt=$cnt+1;}} ?>

				

			</div>
		</div>
	</div>

	<!-- Team -->



	<!-- Newsletter -->



	<!-- Footer -->

	
	<?php include_once('includes/footer.php');?>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles_1/bootstrap4/popper.js"></script>
<script src="styles_1/bootstrap4/bootstrap.min.js"></script>
<script src="plugins_1/greensock/TweenMax.min.js"></script>
<script src="plugins_1/greensock/TimelineMax.min.js"></script>
<script src="plugins_1/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins_1/greensock/animation.gsap.min.js"></script>
<script src="plugins_1/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins_1/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins_1/easing/easing.js"></script>
<script src="plugins_1/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>