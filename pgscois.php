<?php include 'config/config.php'; 
$current_visitors=file_get_contents("visitor_count.txt");
$file = fopen("visitor_count.txt", "w") or die("Unable to open file!");
$total_number_visitors=$current_visitors + 1;
fwrite($file, $total_number_visitors);
fclose($file);
?>
<html>

<head>
	<link rel="stylesheet" href="<?php assets($s3,$environment,"assets/bootstrap-4.3.1/css/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?php assets($s3,$environment,"function/css/mycss.css");?>">
	<link rel="stylesheet" href="<?php assets($s3,$environment,"function/css/footer.css");?>">
	<link href="<?php assets($s3,$environment,"assets/open-iconic-master/font/css/open-iconic-bootstrap.css");?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Poppins&display=swap" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 

    <title></title>
</head>

<body >
    
    <div class="col-lg-12 text-center mt-5 wow bounceInUp"  >

        <img src="<?php assets($s3,$environment,"assets/iPOD/img/socot_logo.png");?>">

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
		<footer class="pt-3 pb-2" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">YOU MAY VISIT US</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0"> </h6>
										<p>Provincial Planning and Development Office - Special Projects Division</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0"> </h6>
										<p>PPDO, Provincial Capitol Compound, Alunan Ave.,
										Brgy. Zone 3, City of Koronadal, South Cotabato, 9506</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">HOTLINE</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-tty"></i></div>
									<div class="col-10">
										<p class="mb-0">(083) 228-9325 </p>
									</div>
								</div>
							</li>
						
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">SOCIAL MEDIA</h5>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>

						
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LOGIN</h5>
						<div class="input-group">
						  	<a href="login.php" class="btn btn-info">Click to Login</a>
						</div>
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
<script src="<?php assets($s3,$environment,"assets/jquery/jquery-3.4.1.js");?>"></script>
<script src="<?php assets($s3,$environment,"assets/bootstrap-4.3.1/js/bootstrap.min.js");?>"></script>
<script>
     $('#scoll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop:  $('#boundery').offset().top - 0 }, 'slow');
    });
</script>
</html>     
