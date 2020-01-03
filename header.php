<?php 


include 'nedmin/netting/baglan.php';


$ayarsor = $db->prepare("SELECT * FROM settings WHERE settings_id=:id");
$ayarsor-> execute(array(

"id"=> 1
));

$ayarcek = $ayarsor-> fetch(PDO::FETCH_ASSOC); 



 ?>



<!DOCTYPE HTML>
<!--
	Justice by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $ayarcek['settings_title'] ?></title>
	<meta name="description" content="<?php echo $ayarcek['settings_desc'] ?>"/>
	<meta name="keywords" content="<?php echo $ayarcek['settings_keys'] ?>" />
	<meta name="author" content="<?php echo $ayarcek['settings_author'] ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">


	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400, 900" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Just<em>ice</em></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="" data-nav-section="home">Ana Sayfa</a></li>
						<li><a href="" data-nav-section="about">Hakkımza</a></li>
						<li><a href="" data-nav-section="practice-areas">Çalışma Alanlarımız</a></li>
						<li><a href="" data-nav-section="our-team">Takımımız</a></li>
						<li class="btn-cta"><a href="" data-nav-section="contact"><span>İletişim</span></a></li>
						<!-- For external page link -->
						<!-- <li><a href="http://gettemplates.co/" class="external">External</a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
