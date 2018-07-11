<?php /* Template Name: servicios */ ?>
<?php get_header(); // This fxn gets the header.php file and renders it ?>
<div class="breadcrumb">
	<?php if(function_exists('bcn_display'))
{
    bcn_display();
}?>
</div>
<div class="container" id="botonera-servicios">
	<div class="col-md-4">
		<a href="<?php echo site_url(); ?>/todos-los-servicios/envio-de-encomiendas/">
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/ip-web-icono-encom.png" alt="">
			<h3>Envío de</h3><h2>Encomiendas</h2>
			<div class="pestania-baja">Paquetería liviana</div>
		</a>
	</div>
	<div class="col-md-4">
		<a href="<?php echo site_url(); ?>/todos-los-servicios/envio-de-documento-comerciales-servicio-de-bolsin-tdc/">
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/ip-web-icono-documcomerciales.png" alt="">
			<h3>Envío de</h3><h2>Documentos comerciales</h2>
			<div class="pestania-baja">Bolsín (TDC)</div>
		</a>
	</div>
	<div class="col-md-4">
		<a href="<?php echo site_url(); ?>/todos-los-servicios/servicios-para-comercio-electronico/">
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/ip-web-icono-comelectronico.png" alt="">
			<h3>Servicios para</h3><h2>Comercio<br>Electrónico</h2>
			<div class="pestania-baja">eCommerce 24</div>
		</a>
	</div>
</div>

<div class="main-servicios-wrapper">
	<div id="main" class="container single-page">
			<section class="content col-md-8 col-md-offset-2 ">
				<div class="lineas-diagonales-page"></div>
				<ul>
					<li>
						<h3><a href="<?php echo site_url(); ?>/envio-con-cadena-de-frio/">Envíos con Cadena de Frío</a></h3>
						<p><a href="<?php echo site_url(); ?>/envio-con-cadena-de-frio/">SpecialPack</a></p>
					</li>
					<li>
						<h3><a href="<?php echo site_url(); ?>/cobro-contra-reembolso/">Cobro contra reembolso</a></h3>
						<p><a href="<?php echo site_url(); ?>/cobro-contra-reembolso/">Servicios CTR</a></p>
					</li>
					<li>
						<h3><a href="<?php echo site_url(); ?>/pago-en-destino/">Pago en Destino</a></h3>
						<p><a href="<?php echo site_url(); ?>/pago-en-destino/">Servicios PD</a></p>
					</li>
					<li>
						<h3><a href="<?php echo site_url(); ?>/remito-conforme/">Remito Conforme</a></h3>
						<p><a href="<?php echo site_url(); ?>/remito-conforme/">Servicio RC</a></p>
					</li>
					<li>
						<h3><a href="<?php echo site_url(); ?>/integral-cash-envio-de-dinero/">Integral Cash </a></h3>
						<p><a href="<?php echo site_url(); ?>/integral-cash-envio-de-dinero/">Envío de Dinero</a></p>
					</li>
				</ul>
			</section>
	</div>
</div>

</div><!--wrapper-->

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
