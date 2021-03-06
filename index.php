<!-- Developed by Harshit Kedia as a part of ACM-VIT Student Chapter-->
<?php
$title="Pravega Racing - VIT University Vellore";
include_once('includes/head.php');
?>
<!--Final version-->
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/mycss/slider1.css" />
<link rel="stylesheet" type="text/css" href="css/mycss/slider2.css" />
<style type="text/css">
	@font-face {
		font-family: 'Tagesschrift';
		src: url('css/mycss/alte_haas_grotesk/AlteHaasGroteskBold.ttf');
		font-weight: normal;
	}
	.main-heading-pravega{
		font-family: 'Tagesschrift';
		font-weight:100;
	}
	.img-circle {
		border-radius: 50%;
	}

	.fb-page{
		width: 100% !important;
	}
	.fb-page blockquote{
		width: 100% !important;
	}
	.twitter-page{
		margin-top: 10px;
	}

	.valign-m{

	}
	.chancellor-img-div{
		width: 100px;
		display: inline-block;
	}
	.chancellor-p-div{
		width: 500px;
		display: inline-block;
	}
	.about-gv-p{

	}
	.chancellor-img{

	}
	#firstsection{
		margin-top: -40px;
	}
	.twitter-follow-button{

	}
	.overlay__background{
		background-color: rgba(255, 255, 255, 0.7);
	}
	.overlay__background a{
		text-decoration: none;
	}
	.cb-slideshow{
		position: fixed;
		z-index: -1;
	}
	
	.recent_fb{
		max-height: 95vh !important;
		max-width: 100vw !important;
	}
	.main-ka-baap{
		z-index: 100;
		border: solid 2px #fff;
		margin-top: 0px;
		margin-bottom: 0px;
		background-color: #ffffff;
	}
	.btnToggle{
		display: none !important;
	}
	.gvisva-section{
		margin-top: -40px;
	}
	.recent_img{
		margin-bottom: 40px;
	}
	@media (min-width: 779px){
		#firstsection{
			margin-top: -40px;
		}
		.gvisva-section .padlr{
			padding-left: 70px;
		}
		.recent_img{
			height: 180px !important;
			width: 330px !important;
			margin-bottom: 20px;
		}
		.saeimg{
			margin-top: -60px;
			width: 100%;

			margin-bottom: -30px;
		}
		.gvisva-section{
			margin-top: -20px;
		}

	}
</style>
<style type="text/css">
	.ig-b- {
		display: inline-block; 
	}
	.ig-b- img { 
		visibility: hidden;
	}
	.ig-b-:hover { 
		background-position: 0 -60px;
	}
	.ig-b-:active { 
		background-position: 0 -120px;
	}
	.ig-b-v-24 {
		width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0;
	}
	@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {

		.ig-b-v-24 { 
			background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png);
			background-size: 160px 178px; 
		} 
	}
</style>

</head>
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<body class="flagstone-splash flagstone-parallax">
	<!--facebook plugin-->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<!-- End of page pre-loader -->

	<?php
	$navactive="home";
	require_once('includes/nav.php');
	?>

	<!-- End of site main header -->

	<section class="">

		<div class="hero-unit hero-unit--banner-4"  id="page">
			<ul class="cb-slideshow">
				<li><span id="11">Image 01</span></li>
				<li><span id="12">Image 02</span></li>
				<li><span id="13">Image 03</span></li>
				<li><span id="14">Image 04</span></li>
				<li><span id="15">Image 05</span></li>
				<li><span id="16">Image 06</span></li>
			</ul>

			
			<div class="hero-unit__content">
				<div class="grid-container">
					<div class="grid-row">
						<div class="column-12 text-center animated-parent">
							<h1 class="text-color-10 font-size-xxlrg animated animate__fade-in-down-short main-heading-pravega"><b>Pravega Racing</b></h1>
							<h5 class="text-color-10 animated animate__fade-in-up-short"><b>
								One Team. One Dream. One Car.
							</b></h5>
						</div>
					</div>
				</div>
			</div>
			<a data-scroll href="#firstsection"><span class="scroll-pointer"></span></a>
		</div>
	</section>
	<!-- End of section -->
	<div class="main-ka-baap">
		<main class="container">
			<section id="firstsection">
				<div class="grid-container-fluid margin-top-70 margin-bottom-50">
					<div class="grid-row">
						<div class="column-8 aboutusdiv">
							<h3 class="text-left"><b>Fifty Four, <span class="redcolor"><b>Pravega !</b></span></b></h3>
							<p class="text-left">
								We are a team of engineers who seek to enhance the learning 
								experience of the student community at VIT University by implementation of engineering 
								fundamentals within the context of building
								a formula style Racecar. We annually take part in the Formula Student competitions 
								organised by Society of Automotive Engineers (SAE). We strive to achieve a 
								steady growth in the Formula Student Circuit by focusing on world class engineering 
								practices and institutionalising innovation.
							</p>
						</div>
						<div class="column-4 fbdiv">
							<!--facebook plugin-->
							<div class="row padl_new">
								<div class="fb-page text-left" data-href="https://www.facebook.com/pravegaracing/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
									<blockquote cite="https://www.facebook.com/pravegaracing/?fref=ts" class="fb-xfbml-parse-ignore">
										<a href="https://www.facebook.com/pravegaracing/?fref=ts">Pravega Racing</a>
									</blockquote>
								</div>
								<div class="twitter-page padl text-left">
									<a href="https://twitter.com/PravegaRacing" class="twitter-follow-button text-left" data-show-count="true">Follow @PravegaRacing</a>	
								</div>
								<div class="instagram-page text-left">
									<a href="https://www.instagram.com/pravega_racing/?ref=badge" target="_blank" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="grid-row padlr">
						<h3 class="text-left">&nbsp;&nbsp;<b>About Formula SAE</b></h3>
						<div class="column-9">
							<p class="text-left">
								Formula SAE (FSAE) is an opportunity for students to design, manufacture, and race 
								a formula-style car. Over 570 university teams from around the world participate in 
								competitions held across the globe including locations such USA, UK, Germany, Italy, 
								Japan and Australia. The participants explain and defend their design decisions, 
								test their driver’s abilities and pitch their car to venture capitalists via a business 
								presentation with the target as amateur weekend autocross drivers.
							</p>
						</div>
						<div class="column-3">
							<img src="img/general/cars/sae.png" class="saeimg">
						</div>
					</div>
				</div>
			</section>
			<section class="gvisva-section animated-parent">
				<div class="grid-container-fluid margin-bottom-10">
					<div class="grid-row animated animate__fade-in-down-short">
						<div class="column-2 text-centerr">
							<div>&nbsp;</div>
							<img src="img/general/chancellor.png" class="img-circle chancellor-img img-responsive hidden-small valign-m text-center">
						</div>
						<div class="column-10">
							<p>
								<div class="text-left-imp"><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i></div>
								<div class="text-left-imp">
									I am happy and proud to inform you that Pravega Racing is the official Formula SAE (FSAE) team of VIT University. The team comprises of a group of able and resolute students of our institution from all academic divisions aiming for excellence. Pravega Racing is among the top three Formula SAE teams of India.
								</div>
								<div class="text-right"><i class="fa fa-quote-right fa-2x" aria-hidden="true"></i></div>
							</p>
							<p class="about-gv-p text-left-imp"><b>
								Dr. G Vishwanathan
								<br>Founder and Chancellor, VIT University
								<br>Former Member of Parliament
								<br>Former Minister, Govt. of Tamil Nadu
								<br>President, Education Promotion Society of India, New Delhi
							</b></p>
						</div>
					</div>

				</div>
			</section>
			<section>
				<div class="grid-container-fluid">
			<!--
			***********change image's title in fancybox_setting.js:92 ***************
		-->
		<h2 class="text-left-imp"><b>Recent Activities</b></h2>
		<div id="recent_activities_div">
		</div>
	</div>
</section>

<!-- End of section -->

<br>
</main>
</div>
<a href="#" class="back-to-top--floating"><i class="ion-ios-arrow-up"></i></a>
<?php
include_once("includes/footer.php");
?>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#recent_activities_div").load("recent_activities_ajax.php");
	})
</script>
</body>
</html>
