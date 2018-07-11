<!doctype html>

<!--[if lt IE 9]> <html class="no-js lte9 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 oldie" lang="en"> <![endif]-->
<!--[if gt IE 9]>  <html> <![endif]-->
<!--[if !IE]><!-->
<html>
	<head>
		<title><?php wp_title("::", "true", "right");?> <?php bloginfo('name'); ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<?php wp_head();?>
	</head>
	<body <?php body_class( 'class-name' ); ?>>
		<div class="wrapper container">
		<header class="main-header container">
			<div class="col-md-3 col-xs-10 col-sm-10 barra-sup logo-wrap">
				<h1 class="logo"><a href="<?php echo site_url(); ?>">Integral Express - Soluciones logísticas en Movimiento</a></h1>
			</div>
			<div class="col-xs-2 mobile-menu">
				<a href="#"><i class="fa fa-bars"></i></a>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12">
				<div class="navbar ">
						<?php wp_nav_menu( array( 'theme_location' => 'home-menu',
						  'depth' => 2,
						  'container' => false,
						  'menu_class' => 'nav',
						  'walker' => new BootstrapNavMenuWalker())); ?>
				</div>
			</div>
			<div class="col-md-1 hidden-sm hidden-xs">
				<a href="<?php echo home_url();?>/preguntas-frecuentes/" id="faq">
					<strong>Preguntas</strong><br>
					Frecuentes
				</a>
			</div>
		</header>