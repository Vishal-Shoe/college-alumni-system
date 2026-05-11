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
/* Custom CSS for Job Section */
/* Job Section for White/Light Theme */
.job-section {
    background: #f9f9f9; /* light gray background */
    padding: 60px 0;
    margin: 40px 0;
    border-radius: 12px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
}

.job-section h3 {
    text-align: center;
    color: #333;
    font-size: 2.2rem;
    margin-bottom: 40px;
    font-weight: 700;
}

.job-stats {
    text-align: center;
    color: #555;
    margin-bottom: 30px;
    font-size: 1.1rem;
    background: #fff;
    padding: 12px 15px;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
}

.job-card {
    background: #ffffff;
    border-radius: 12px;
    padding: 25px 30px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border-left: 4px solid #00aaff; /* subtle accent color */
}

.job-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.job-title {
    color: #222;
}

.job-company {
    color: #00aaff; /* accent color for company */
}

.job-meta-item {
    color: #555;
}

.job-description {
    background: #f8f8f8;
    border-left: 3px solid #00aaff;
    color: #555;
}

.apply-btn {
    background: #00aaff; /* matches accent */
    color: #fff;
}

.apply-btn:hover {
    background: #0077cc;
}

/* Job Type Badge */
.job-type {
    background: #e0f7ff;
    color: #0077cc;
}

.job-section h3 {
    text-align: center;
    color: white;
    font-size: 2.5rem;
    margin-bottom: 40px;
    font-weight: 700;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.job-card {
    background: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border-left: 5px solid #667eea;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
    flex-wrap: wrap;
}

.job-title {
    color: #333;
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: 600;
    flex: 1;
}

.job-company {
    color: #667eea;
    font-size: 1.1rem;
    font-weight: 500;
}

.job-meta {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
    margin-bottom: 15px;
}

.job-meta-item {
    display: flex;
    align-items: center;
    color: #666;
}

.job-meta-item strong {
    color: #333;
    margin-right: 8px;
    min-width: 120px;
}

.job-description {
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
    padding: 15px;
    background: #f8f9fa;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

.job-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    padding-top: 15px;
    border-top: 1px solid #eee;
    gap: 10px;
}

.apply-btn {
    display: inline-block;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.apply-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    color: white;
    text-decoration: none;
}

.job-type {
    background: #e9ecef;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    color: #495057;
}

.loading {
    text-align: center;
    color: white;
    font-size: 1.2rem;
    padding: 40px;
    background: rgba(255,255,255,0.1);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.job-stats {
    text-align: center;
    color: white;
    margin-bottom: 30px;
    font-size: 1.1rem;
    background: rgba(255,255,255,0.1);
    padding: 15px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.fa {
    margin-right: 8px;
    color: #667eea;
}

.job-card:hover .fa {
    color: #764ba2;
}

/* Responsive Design */
@media (max-width: 768px) {
    .job-section {
        padding: 40px 15px;
        margin: 20px 0;
    }
    
    .job-section h3 {
        font-size: 2rem;
    }
    
    .job-card {
        padding: 20px;
    }
    
    .job-meta {
        grid-template-columns: 1fr;
    }
    
    .job-header {
        flex-direction: column;
    }
    
    .job-footer {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .job-meta-item strong {
        min-width: 100px;
    }
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
								<li>Online Jobs</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

<!-- Job Search Bar Added -->
<div class="container" style="margin-top: 40px; text-align:center;">
    <form method="get" style="display:inline-block; background:#fff; padding:20px 30px; border-radius:15px; box-shadow:0 5px 20px rgba(0,0,0,0.1);">
        <input type="text" name="keyword" placeholder="Search job title or skill..." value="<?php echo htmlspecialchars($_GET['keyword'] ?? ''); ?>" style="padding:12px; width:280px; border-radius:8px; border:1px solid #ccc;">
        <input type="text" name="location" placeholder="Enter location (e.g. India)" value="<?php echo htmlspecialchars($_GET['location'] ?? 'India'); ?>" style="padding:12px; width:200px; border-radius:8px; border:1px solid #ccc; margin-left:10px;">
        <button type="submit" style="background:#007bff; color:white; border:none; padding:12px 25px; border-radius:8px; cursor:pointer;">Search</button>
    </form>
</div>

       <div class="container-fluid" style="background:#f9f9f9; padding:60px 5%; border-radius:0;">

    <h3 style="text-align:center; color:#333; font-size:2.5rem; margin-bottom:50px; font-weight:700; letter-spacing:1px;">
        <i class="fa fa-briefcase" style="color:#007bff; margin-right:10px;"></i> Explore the Latest Career Opportunities
    </h3>

    <?php
    $keyword = urlencode($_GET['keyword'] ?? 'software developer');
    $location = urlencode($_GET['location'] ?? 'India');

    $api_url = "https://jsearch.p.rapidapi.com/search?query={$keyword}%20in%20{$location}&num_pages=1";
    $headers = [
        "X-RapidAPI-Key: f9f698e71bmsh41ef2e395ea3789p1aac4fjsnc849ed3796ea",
        "X-RapidAPI-Host: jsearch.p.rapidapi.com"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code === 200) {
        $data = json_decode($response, true);

        if (!empty($data['data'])) {
            $job_count = count($data['data']);
            echo "<div style='text-align:center; color:#333; background:#e9ecef; padding:15px 20px; border-radius:12px; margin-bottom:35px; display:inline-block; font-size:1.1rem; box-shadow:0 0 10px rgba(0,0,0,0.05);'>
                    <i class='fa fa-chart-line'></i> Found {$job_count} Active Job Listings
                  </div>";

            foreach ($data['data'] as $job) {
                $job_title = htmlspecialchars($job['job_title'] ?? 'Not specified');
                $employer_name = htmlspecialchars($job['employer_name'] ?? 'Not specified');
                $job_city = htmlspecialchars($job['job_city'] ?? 'Not specified');
                $job_country = htmlspecialchars($job['job_country'] ?? 'Not specified');
                $job_apply_link = htmlspecialchars($job['job_apply_link'] ?? '#');
                $job_description = htmlspecialchars($job['job_description'] ?? 'No description available');
                $employment_type = htmlspecialchars($job['job_employment_type'] ?? 'Not specified');

                echo "<div style='background:#f1f3f5; border-radius:12px; padding:25px; margin-bottom:30px; box-shadow:0 8px 20px rgba(0,0,0,0.08); border-left:6px solid #007bff;'>
                        <div style='display:flex; justify-content:space-between; flex-wrap:wrap;'>
                            <div>
                                <h4 style='color:#212529; font-size:1.5rem; font-weight:600;'><i class='fa fa-briefcase' style='color:#007bff;'></i> {$job_title}</h4>
                                <p style='color:#007bff; font-weight:500;'><i class='fa fa-building'></i> {$employer_name}</p>
                            </div>
                            <span style='background:#dee2e6; color:#495057; padding:6px 20px; border-radius:25px; font-size:0.9rem; font-weight:500;'><i class='fa fa-clock-o'></i> {$employment_type}</span>
                        </div>
                        <div style='margin:10px 0; color:#495057;'><strong><i class='fa fa-map-marker'></i> Location:</strong> {$job_city}, {$job_country}</div>
                        <div style='background:#e9ecef; padding:15px; border-left:4px solid #007bff; border-radius:10px; color:#495057; margin-bottom:20px;'>
                            <strong><i class='fa fa-file-text'></i> Job Description:</strong><br>" . 
                            (strlen($job_description) > 220 ? substr($job_description, 0, 220) . '...' : $job_description) . 
                        "</div>
                        <a href='{$job_apply_link}' target='_blank' class='apply-btn'><i class='fa fa-external-link'></i> Apply Now</a>
                    </div>";
            }
        } else {
            echo "<p style='text-align:center;'>No jobs found for your search.</p>";
        }
    } else {
        echo "<p style='text-align:center;'>Error fetching job data. Please try again later.</p>";
    }
    ?>
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
