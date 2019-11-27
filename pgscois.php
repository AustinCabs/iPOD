<?php include 'config/config.php'; ?>
<html>

<head>
	<link rel="stylesheet" href="<?php assets($s3,"/assets/bootstrap-4.3.1/css/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?php assets($s3,"/function/css/mycss.css");?>">
	<link rel="stylesheet" href="<?php assets($s3,"/function/css/footer.css");?>">
	<link href="<?php assets($s3,"/assets/open-iconic-master/font/css/open-iconic-bootstrap.css");?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Poppins&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 

    <title></title>
</head>

<body >
    
    <div class="col-lg-12 text-center mt-5 wow bounceInUp"  >

        <img src="<?php assets($s3,"/assets/iPOD/img/socot_logo.png");?>">

        <h1 class="outline" style="font-family: 'Montserrat', sans-serif; ">
        PROVINCIAL GOVERMENT OF SOUTH COTABATO <br> 
        <h4 class="outline" style="font-family: 'Poppins',sans-serif;">
        Open Information System</h4> </h1>

    </div>   
            <form method="post" action="search.php">
                <div class="col-md-4 offset-md-4 mt-5">
                    <div class="input-group mb-3">
                       
                        <input type="text" class="form-control" placeholder="Search Here...." aria-label="Recipient's username" aria-describedby="basic-addon2"  name="search_data" >
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit"><span class="oi oi-magnifying-glass"></span> Search</button>
                        </div>
                        
                    </div>
                </div>
            </form>
            <div class="col-lg-12 text-center mt-3 pb-5">
                <h6 class="outline">Note: Search for File Name , Office, Year, Sector, File type or Keyword</h6>
            </div>

            <div class="col-lg-12 text-center pb-5  ">
                <!-- <a id="button" class="btn btn-success">Search By Office</a> -->
                <h3 class="outline"> OR</h3>
            </div>

             <div class="col-lg-12 text-center pb-5  ">
                <!-- <a id="button" class="btn btn-success">Search By Office</a> -->
                <button id="scoll" class="btn btn-primary  ">Search by Office</button>
            </div>
            
            <div class="col-lg-12 text-center pt-5 pb-3">
            </div>


            <div class="col-lg-12 text-center mt-5">
                <div class="container" id="boundery">
                    <div class="row">
                                <?php include 'function/php/grid_bootstrap.php';?> 
                    </div>
                </div>
        
            </div> <!-- col-lg-12 -->


<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Have any questions?</h6>
										<p><a href="#">Support@userthemes.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONTACT INFORMATION</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">28 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">29 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">30 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LOGIN</h5>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Your Email Address">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
						</div>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; Copyright 2019  <a href="https://southcotabato.gov.ph/">Government of South Cotabato</a> | <a href="https://southcotabato.gov.ph/ogp/">OPEN GOVERNMENT PARTNERSHIP</a> | All Rights Reserved | Powered by PPDO-SPECIAL PROJECT DIVISION
						</div>
					</div>
				</div>
			</div>
		</section>
    
</body>
<script src="<?php assets($s3,"/assets/jquery/jquery-3.4.1.js");?>"></script>
<script src="<?php assets($s3,"/assets/bootstrap-4.3.1/js/bootstrap.min.js");?>"></script>
<script>
     $('#scoll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop:  $('#boundery').offset().top - 0 }, 'slow');
    });
</script>
</html>     
