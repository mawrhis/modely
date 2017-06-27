<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
      <header class="header" >
      <div class="header__toggle">menu</div>
        <div class="wrapper">
          <h4 class="hdr-logo header__logo" role="banner">
            <a class="hdr-logo-link header__logo-link" href="<?php echo home_url(); ?>" rel="home"><?php bloginfo('name'); ?></a> <img class="header__logo-image" src="<?php echo get_template_directory_uri(); ?>/dist/images/model.svg">
          </h4>
          <nav id="nav-main" class="nav-main header__nav" role="navigation">
            
            <?php html5blank_nav(); ?>
          </nav><!-- #nav -->
        </div>
      </header>
			<!-- /header -->
