<?php /* Template Name: Flecha Bus */ ?>
<?php get_header();?>
<div class="breadcrumb">
	<?php if(function_exists('bcn_display'))
{
    bcn_display();
}?>
</div>
<div id="main" class="container single-page">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<header class="page-header">
				<h1><?php the_title(); ?></h1>
				<div class="carousel slide carousel-fade" id="carousel-flota" data-ride="carousel">
					<ol class="carousel-indicators"> 
						<li data-target="#carousel-flota" data-slide-to="0" class="active"></li> 
						<li data-target="#carousel-flota" data-slide-to="1" class=""></li> 
						<li data-target="#carousel-flota" data-slide-to="2" class=""></li> 
						<li data-target="#carousel-flota" data-slide-to="3" class=""></li> 
					</ol> 
					<div class="carousel-inner col-md-12" role="listbox"> 
						<div class="item active">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/micro-flechabus-pasajes.jpg" alt="">
						</div> 
					</div> 
				</div>
			</header>
			<div class="second_title">
				Convenio con <strong>Flecha Bus</strong>
			</div>
			<section class="single-page-content">
			<div class="col-container">
				<div class="lineas-diagonales-page col-md-1 col"></div>	
				<div class="col col-md-8 contenido-page"> <?php the_content(); ?></div>
			</div>
			</section>
		<?php endwhile;?>
	<?php endif; ?>
</div>
<?php get_footer();?>


