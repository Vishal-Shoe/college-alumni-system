<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>College Alumni System || Contact</title>

<link rel="stylesheet" type="text/css" href="styles_1/bootstrap4/bootstrap.min.css">
<link href="plugins_1/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles_1/contact.css">
<link rel="stylesheet" type="text/css" href="styles_1/contact_responsive.css">
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
								<li>Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		


		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

				

					<!-- Contact Info -->
					<div class="col-lg-8">
						<div class="contact_info">
							<div class="contact_info_title">Contact Info</div>
						
							<div class="contact_info_location">
								<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
								<ul class="location_list">
									<li><h3>Address</h3>
								<p><?php  echo htmlentities($row->PageDescription);?></p></li>
									<li><h3>Contact Number</h3>
								
								<p>+91&nbsp;<?php  echo htmlentities($row->MobileNumber);?></p></li>
									<li><h3>Email</h3>
								
								<p><?php  echo htmlentities($row->Email);?></p></li>
								</ul><?php $cnt=$cnt+1;}} ?>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="alumni-search">
		<h3>Search Alumni on Internet</h3>
		<form method="get">
			<input type="text" name="name" placeholder="Enter Alumni Name" required>
			<button type="submit">Search</button>
		</form>

		<div class="results" id="results-section">
		<?php
		if(isset($_GET['name'])){
		    echo "<script>document.getElementById('results-section').style.display = 'block';</script>";

		    $user_name = trim($_GET['name']);
		    $query = urlencode($user_name . " ASM Group of Institutes");
		    $api_key = 'AIzaSyAfBo-0R3DdhRCDh-rt7QskHN72cP6ilOU';  // Replace with your JSON API key
		    $cse_id  = 'd4d7d11d0626b4c60';   // Replace with your CSE ID

		    $url = "https://www.googleapis.com/customsearch/v1?key={$api_key}&cx={$cse_id}&q={$query}&num=10";

		    $ch = curl_init($url);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		    $resp = curl_exec($ch);
		    $err  = curl_error($ch);
		    curl_close($ch);

		    if($err){
		        echo "<p>Error: ".htmlentities($err)."</p>";
		    } else {
		        $data = json_decode($resp, true);
		        if(empty($data['items'])){
		            echo "<p>No results found.</p>";
		        } else {
		            foreach($data['items'] as $item){
		                echo '<div>';
		                echo '<h5><a href="'.htmlentities($item['link']).'" target="_blank">'.htmlentities($item['title']).'</a></h5>';
		                echo '<p>'.htmlentities($item['snippet']).'</p>';
		                echo '</div><hr>';
		            }
		        }
		    }
		}
		?>
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
<script src="plugins_1/easing/easing.js"></script>
<script src="plugins_1/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins_1/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>