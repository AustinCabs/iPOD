<html>

<head>
<link rel="stylesheet" href="assets/bootstrap-4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="function/css/mycss.css">
<link rel="stylesheet" href="function/css/animate.css">
<link href="assets/open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:700|Poppins&display=swap" rel="stylesheet">

    <title></title>
</head>

<body>
    
    <div class="col-lg-12 text-center mt-5 wow bounceInUp"  >

        <img src="iPOD/img/socot_logo.png">

        <h1 class="outline"style="font-family: 'Montserrat', sans-serif;
        -webkit-text-stroke: 1px black;
        color: white;
        text-shadow:
        3px 3px 0 #000,
        -1px -1px 0 #000,  
        1px -1px 0 #000,
        -1px  1px 0 #000,
        1px  1px 0 #000; ">
        PROVINCIAL GOVERMENT OF SOUTH COTABATO <br> <h4 style="font-family: 'Poppins',sans-serif; 
        color: white;
        text-shadow:
        3px 3px 0 #000,
        -1px -1px 0 #000,  
        1px -1px 0 #000,
        -1px  1px 0 #000,
        1px  1px 0 #000;">
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

                <button id="scroll" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Search by Office
                </button>

            </div>
            


            <div class="col-lg-12 text-center mt-5">
                <div class=" container collapse" id="collapseExample">
                    <div class="row" id="boundery">
                                <?php include 'function/php/grid_bootstrap.php';?> 
                    </div>
                </div>
        
            </div> <!-- col-lg-12 -->
    
</body>
<script src="assets/jquery/jquery-3.4.1.js"></script>
<script src="assets/wow.min.js"></script>
<Script>  new WOW().init(); </Script>
<script src="assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
  
/*  $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
      fitWidth: true,
    });*/
     $('#scoll').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop:  $('#boundery').offset().top - 0 }, 'slow');
    });
</script>
</html>     
