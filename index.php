<?php include 'config/assets_url.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>iPOD</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php assets($s3,$environment,"assets/iPOD/js/rs-plugin/css/settings.css");?>" media="screen">
  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/iPOD/css/bootstrap.css"); ?>" >
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/iPOD/css/style.css");?>">
  <link rel="stylesheet" href="<?php assets($s3,$environment,"assets/iPOD/skin/default.css");?>">

</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">

               <div class="row">
                      <a href="https://ogpsouthcotabato20.wixsite.com/onlinearchives"><img data-0="width: 100px; height:98px;" data-300=" width:50px; height:50px;" src="<?php assets($s3,$environment,"assets/iPOD/img/OGP_logo.png");?>" alt=""></a>

                      <a href="https://southcotabato.gov.ph/"><img data-0="width: 100px; height:95px;" data-300=" width:50px; height:50px;" src="<?php assets($s3,$environment,"assets/iPOD/img/socot_logo.png");?>" alt=""></a>
                </div>

        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="<?php  $_SERVER['PHP_SELF']; ?>">Home</a></li>
        </ul>
      </div>
    </div>
  </div>

  <section id="intro">
    <div class="intro-content">
      <h2>iPOD</h2>
      <h3>Province of South Cotabato </h3>
      <h3>Integrated Provincial Online Database</h3>
      <div>
        <a href="#section-services" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-list">screen</a>
            </div>
          </div>
          <h3 class="text-bold">iSEPS</h3>
          <p>Interactive Socio-Economic Profile System</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="pgscois.php"  target="_blank" class="hi-icon hi-icon-archive">location</a>
            </div>
          </div>
          <h3 class="text-bold">PGSC</h3>
          <p>Data from Provincial Government of South Cotabato Offices </p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-earth">images</a>
            </div>
          </div>
          <h3 class="text-bold">OMDP</h3>
          <p>Open Mining Data Portal</p>

          <div class="clear"></div>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-location">archive</a>
            </div>
          </div>
          <h3 class="text-bold">Infradev Live</h3>
          <p>Infrastructure Monitoring System </p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-contract">Mobile</a>
            </div>
          </div>
          <h3 class="text-bold">PDS</h3>
          <p>Procurement Data System</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-user">Faster</a>
            </div>
          </div>
          <h3 class="text-bold">LITS</h3>
          <p>Legislative Information Technology System </p>

          <div class="clear"></div>
        </div>

      </div>
    </div>
  </section>  



  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; All rights reserved</p>
        </div>
      </div>

 
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>


  <script src="<?php assets($s3,$environment,"assets/iPOD/js/modernizr-2.6.2-respond-1.1.0.min.js");?>"></script>
  <script src="<?php assets($s3,$environment,"assets/iPOD/js/jquery.js");?>"></script>
  <script src="<?php assets($s3,$environment,"assets/iPOD/js/jquery.easing.1.3.js");?>"></script>
  <script src="<?php assets($s3,$environment,"assets/iPOD/js/bootstrap.min.js");?>"></script>
  <script src="<?php assets($s3,$environment,"assets/iPOD/js/jquery.localScroll.min.js");?>"></script>
  <script src="<?php assets($s3,$environment,"assets/iPOD/js/main.js");?>"></script>

</body>

</html>
