<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Alumni System || About</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles_1/bootstrap4/bootstrap.min.css">
<link href="plugins_1/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins_1/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins_1/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins_1/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins_1/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles_1/about.css">
<link rel="stylesheet" type="text/css" href="styles_1/about_responsive.css">

<style>
.alumni-search {
    max-width: 900px;
    margin: 50px auto;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    text-align: center;
}
.alumni-search input[type="text"] {
    width: 70%;
    padding: 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    margin-right: 10px;
}
.alumni-search button {
    padding: 12px 20px;
    border-radius: 8px;
    border: none;
    background: #007bff;
    color: #fff;
    cursor: pointer;
}
.alumni-search button:hover {
    background: #0056b3;
}
.results {
    margin-top: 30px;
    text-align: left;
    display: none; /* Hide by default */
}
</style>
</head>
<body>

<div class="super_container">

	<!-- Header -->
	<?php include_once('includes/header.php');?>


	<!-- Home -->
	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>About</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- About Section -->
	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To College Alumni System</h2>
						<?php
						$sql="SELECT * from tblpage where PageType='aboutus'";
						$query = $dbh -> prepare($sql);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						if($query->rowCount() > 0) {
							foreach($results as $row) { ?>
								<div class="section_subtitle"><p><?php echo ($row->PageDescription);?></p></div>
							<?php } 
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	
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
<script src="plugins_1/colorbox/jquery.colorbox-min.js"></script>
<script src="js/about.js"></script>

</body>
</html>
