<!DOCTYPE html>
<html lang="en">
<head>
	<title>이그레브</title>
	<meta charset="UTF-8">
	<meta name="description" content="igrev, Ignorance Revolution">
	<meta name="keywords" content="portfolio">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/cubeportfolio/css/cubeportfolio.min.css"/>
    <link rel="stylesheet" href="/assets/css/colors/red.css"/>
	<link rel="stylesheet" href="/assets/css/style.css"/>
	<link rel="stylesheet" href="/assets/css/dev.stillknow.css?v=3"/>

    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">

    <!-- Font icons -->
    <link rel="stylesheet" href="/assets/icon-fonts/fontawesome-5.0.6/css/fontawesome-all.min.css"/>

	
	<!-- Javascripts -->
    <script src="/assets/js/jquery-2.1.4.min.js"></script>
    <script src="/assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="/assets/js/typed.js"></script>
    <script src="/assets/js/jquery.hover3d.js"></script>
    <script src="/assets/twitter-api/tweetie.js"></script>
    <script src="/assets/js/main.js"></script>
    
    <script src="/assets/js/jquery.cookie.js"></script>
    <script src="/assets/js/dev.stillknow.js"></script>
<script>
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VJMGP545BP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VJMGP545BP');
</script>
</head>
<body>
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    <!-- HEADER -->
    <header>
	<div class='logo-con'>
		<div class="logo-light"></div>
	        <img class="logo" src="/assets/images/logo.png" alt="stillknow" onclick="$.cookie('lastPage','');location.reload();">
	</div>
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- FULL MENU -->
	<?php include "./inc/_fullMenu.php";?>

    <!-- SITE CONTENT -->
    <div class="wrapper" id="wrapper">
	<?php
		if(!empty($_COOKIE["lastPage"])){
			include($_COOKIE["lastPage"]);
		} else {
			include('./home.php');
		}
	?>
    </div> <!-- wrapper end -->


	<footer>
       <div class="cont">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 copyright">
                    &nbsp;&nbsp;<img src="/assets/images/logo_bottom.png" alt="igrev" onclick="$.cookie('lastPage','');location.reload();">
                    <p><strong>이그레브</strong></p>
                    <p> Biz No : <strong>540-09-00345</strong><br />
                    	Tel : <strong><a href="callto:+82-2-3789-6666">+82-2-3789-6666</a></strong><br />
                    	E-mail : <strong><a href="mailto:aiden@igrev.kr">aiden@igrev.kr</a></strong><br />
                    	18F, Wework, 51, Jong-ro, Jongno-gu, Seoul, Republic of Korea, 03161</p>
                    <p>© 2016 이그레브 Creative Agency</p>
                </div>
                <div class="col-md-4 d-sm-none d-md-block">
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i>  </a>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-behance" aria-hidden="true"></i>  </a>
                        <a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i>  </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 d-none d-sm-block getintouch">
                    <a href="#">
                        <strong>Get In Touch</strong><br>
                        <p>aiden@igrev.kr</p>
                    </a>
                </div>
            </div>
       </div>
    </footer>
</body>

	<?php
		if(!empty($_COOKIE["lastPage"])){
		}
	?>
	<script type="text/javascript">
		$(function(){
			//$(".nav-icon").click();
			$("#full-menu-ul li a[href*='${lastPage}']").trigger("click");
		});
	</script>
</html>