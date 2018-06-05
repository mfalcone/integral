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
				<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('full');
					}?>
			</header>
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


