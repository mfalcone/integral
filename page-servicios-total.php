<?php /* Template Name: servicios secundarios */ ?>
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
				<div class="col col-md-8 contenido-page">
					 <?php the_content(); ?>
					<div class="servicios-navbar ">
						<ul id="menu-menu-servicios" class="servicios-nav">
							<li id="menu-item-167" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/todos-los-servicios/envio-de-encomiendas/">Envío de<strong> Encomiendas</strong></a><span class="sub">Paquetería Liviana</span></div></li>
							<li id="menu-item-168" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/todos-los-servicios/servicios-para-comercio-electronico/">Servicios para <strong>comercio electrónico</strong></a><span class="sub">eCommerce 24</span></div></li>
							<li id="menu-item-169" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/todos-los-servicios/envio-de-documento-comerciales-servicio-de-bolsin-tdc/">Envio de <strong>documento comerciales</strong></a><span class="sub">Bolsín (TDC)</span></div></li>
							<li id="menu-item-170" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/envio-con-cadena-de-frio/">Envío con <br>cadena de Frío</a><span class="sub">SpecialPack</span></div></li>
							<li id="menu-item-171" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/cobro-contra-reembolso/">Cobro contra<br> reembolso</a><span class="sub">Servicio CTR</span></div></li>
							<li id="menu-item-172" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/pago-en-destino/">Pago en <br>destino</a><span class="sub">Servicio PD</span></div></li>
							<li id="menu-item-173" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/remito-conforme/">Remito <br>Conforme</a><span class="sub">Servicio RC</span></div></li>
							<li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page"><div><a href="<?php echo site_url(); ?>/integral-cash-envio-de-dinero/">Envío de <br> dinero</a><span class="sub">Integral Cash</span></div></li>
						</ul>
					</div>
				</div>
			</div>
			</section>
		<?php endwhile;?>
	<?php endif; ?>
</div>
<?php get_footer();?>


