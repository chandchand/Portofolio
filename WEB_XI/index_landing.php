<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title>Welcome</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 

	<!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
	<![endif]-->
    <style type="text/css"> 

        body{

            background-image: url(images/2.jpeg);
            background-size: 2400px; 
            background-position: center;
            width: auto;
            
        }


    </style>



</head>

       
      

    <div id="wrapper">

        <div id="home" class="video-section js-height-full" class="Welcome">
            <div class="overlay"></div>
            <div class="home-text-wrapper relative container">
                <div class="home-message">
                     <div class="tagline-message">
                            <h2><mark class="rotate">HI, Welcome, </mark> <mark class="rotate">Apa Kabar nya?, Di Blog Sderhana ini,</mark></h2>
    
                    <div class="btn-wrapper">
                        <div class="text-center">
                            <a href="dashboard.php" class="btn btn-primary">lets Start</a> &nbsp;
                        </div>
                    </div><!-- end row -->
                </div>
            </div>
        </div>

        
    
        

        <div class="section copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="cop-logo">
                            <img src="images/logo-normal.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 text-right">
                        <div class="cop-links">
                            <ul class="list-inline">
                                <li>&copy; 2019 CHANDS | Bandung  : <a href="https://smkmvp-bdg.sch.id/">SMK MVP ARS Internasional</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/rotate.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/masonry.js"></script>
    <script src="js/masonry-4-col.js"></script>
    <!-- VIDEO BG PLUGINS -->
    <script src="videos/libs/swfobject.js"></script> 
    <script src="videos/libs/modernizr.video.js"></script> 

    <script>
        jQuery(document).ready(function($) {
            var Video_back = new video_background($("#home"), { 
                "position": "absolute", //Follow page scroll
                "z-index": "-1",        //Behind everything
                "loop": true,           //Loop when it reaches the end
                "autoplay": true,       //Autoplay at start
                "muted": true,          //Muted at start
                "mp4":"videos/video.mp4" ,     //Path to video mp4 format
                "video_ratio": 1.7778,              // width/height -> If none provided sizing of the video is set to adjust
                "fallback_image": "images/dummy.png",   //Fallback image path
                "priority": "html5"             //Priority for html5 (if set to flash and tested locally will give a flash security error)
            });
        });
    </script>

</body>
</html>