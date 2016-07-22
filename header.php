<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	</head>

	<body data-spy="scroll" data-target="#navbar" data-offset="45">

		<div class="content" >

	    <!-- NAVIGATION -->
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#start">Startup Garden</a>
	        </div>

	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li data-toggle="collapse" data-target=".in"><a href="#about">About</a></li>
	            <li data-toggle="collapse" data-target=".in"><a href="#schedule">Schedule</a></li>
	            <li data-toggle="collapse" data-target=".in"><a href="#teams">Teams</a></li>
	            <li data-toggle="collapse" data-target=".in"><a href="#people">People</a></li>
	            <li data-toggle="collapse" data-target=".in"><a href="#gallery">Gallery</a></li>
	            <li data-toggle="collapse" data-target=".in"><a href="#news">News</a></li>
	            <li data-toggle="collapse" data-target=".in"><a href="#contact">Contact</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>