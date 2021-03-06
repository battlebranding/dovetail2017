<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <title>Dovetail - Corporate Event Solutions - North Carolina + California</title>
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
		<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700|Voltaire" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="https://dl.dropbox.com/s/wjeqrmv1565i5x8/battle.css" />
		<?php wp_head(); ?>
	</head>
  	<body>
		<section id="header">
			<div class="col col-grid three-columns two-to-one">
				<div class="col">
					<div class="item item-text">
						<p>Serving California &amp; North Carolina</p>
					</div>
				</div>
				<div class="col">
					<div class="item item-text centered">
						<h1 id="logo">Dovetail</h1>
					</div>
				</div>
				<div class="col">
					<div class="item item-menu">
						<ul class="menu horizontal centered">
							<li><a href="<?php echo home_url(); ?>">Home</a></li>
							<li><a href="<?php echo home_url('about'); ?>">About</a></li>
							<li><a href="<?php echo home_url('services'); ?>">Services</a></li>
							<li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="home-intro">
			<div class="col col-grid two-columns two-to-one">
				<div class="col"></div>
				<div id="board-room" class="col right">
					<div class="item item-title">
						<h1>Full Service Event Management</h1>
						<h2>for corporations &amp; small businesses</h2>
					</div>
					<div class="item item-button">
						<a href="<?php echo home_url('services') ?>" class="button">Learn More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</section>
		<section id="home-quote">
			<div class="col col-grid two-columns">
				<div class="col left">
					<div class="item item-text right">
						<h2>Those who can't do, teach. Those who don't wed, plan. Those who won’t conform, manage.</h2>
						<a href="<?php echo home_url('about#about-tiffany') ?>">- Tiffany Burnette, CEO <i class="fa fa-chevron-circle-right" aria-hidden="true"></i><a>
					</div>
				</div>
				<div class="col right">
					<div class="item item-image centered">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/dove-tail-logo-medium.png'; ?>" />
					</div>
				</div>
			</div>
		</section>
		<section id="home-dinner">
			<div class="col col-grid">
				<div class="item item-image">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/dt-dinner-bg.png'; ?>" />
				</div>
			</div>
		</section>
		<section id="home-solutions">
			<div class="col col-grid">
				<div class="item item-title">
					<h2>Corporate Event Solutions</h2>
				</div>
				<div class="item item-text">
					<p>Our mission is to provide the highest quality services in a manner that captures your goals and minimizes stress throughout the event process.</p>
				</div>
				<div class="item item-button">
					<a href="<?php echo home_url('contact') ?>" class="button yellow">Schedule A Consultation <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</section>
		<section id="home-campaigns">
			<div class="col col-grid two-columns">
				<div class="col">
					<div class="item item-image left">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/dovetail-logo-silhouette.png'; ?>" class="bottom" style="max-height: 200px;" />
					</div>
				</div>
				<div class="col right">
					<div class="item item-title">
						<h2>Custom Campaigns to Boost Morale</h2>
					</div>
					<div class="item item-text">
						<p>Experience the reward of internal events catered to redefining your company’s culture. <a href="<?php echo home_url('services'); ?>">Learn More</a></p>
					</div>
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="col col-grid three-columns">
				<div class="col right">
					<div class="item item-text">
						<p>Office: (909) 667-2205</p>
					</div>
				</div>
				<div class="col centered">
					<div class="item item-menu">
						<ul class="menu horizontal centered">
							<li><a href="https://facebook.com/pg/dovetailllc/about/" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/facebook-icon.png'; ?>" style="max-height: 48px;" /></a></li>
							<li><a href="https://instagram.com/dovetail_ca" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/instagram-icon.png'; ?>" style="max-height: 48px;" /></a></li>
							<li><a href="https://linkedin.com/company/dovetail-llc" target="_blank"><img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin-icon.png'; ?>" style="max-height: 48px;" /></a></li>
						</ul>
					</div>
				</div>
				<div class="col left">
					<div class="item item-text">
						<p>E-mail: <a href="mailto:tiffany@dove-tail.net">tiffany@dove-tail.net</a></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="item item-text copyright">
					<p>&copy; <?php date('Y'); ?> Dovetail, LLC. All rights reserved.</p>
				</div>
			</div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>
