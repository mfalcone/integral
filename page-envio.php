<?php /* Template Name: Envio */ ?>
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
					<form method="post" id="seguimiento-envio" action="http://web.integralexpress.com/scripts/tracking.php">
					<fieldset>
						<label for="puntodeventa">Código punto de venta
:</label>
						<input type="text" name="agecod" id="puntodeventa" placeholder="(Ej: 6001)">
					</fieldset>
					<fieldset>
						<label for="letra">Letra:</label>
						<select name="tipfor" id="letra">
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="p">P</option>
						</select>
					</fieldset>
					<fieldset>
						<label for="numeroguia">Número de Guía:</label>
						<input type="text" name="guinro" id="numeroguia" placeholder="(Ej: 00005678) ">
					</fieldset>
					<fieldset>
						<label>Ingrese el número de la imagen:</label>
						<input name="captcha" type="text" maxlength="255" value=""> 
					</fieldset>
					<fieldset>
						<img src="http://web.integralexpress.com/scripts/captcha.php">
					</fieldset>
   
   <div>
     
	 <input class="btn btn-warning btn-lg" type="submit" name="tracking_sumit" value="BUSCAR">				
					</form>
					<div id="resultados">
					

					</div>
				</div>
			</div>
			</section>
			<script type="text/javascript">
			$ = jQuery;
			var url_string = window.location.href
	  		var url = new URL(url_string);
			var puntodeventa = url.searchParams.get("puntodeventa");
			var numeroguia = url.searchParams.get("numeroguia");
			var letra = url.searchParams.get("letra");
			if(puntodeventa && numeroguia){
				$("#puntodeventa").val(puntodeventa)
				$("#numeroguia").val(numeroguia)
				$('#letra option[value="'+letra+'"]').attr("selected", "selected");
			}

			form = "#seguimiento-envio";
			 $(form).submit(function (event) {
			 	$("#resultados").html("cargando...")
		        event.preventDefault();
		        $.ajax({
				url: $(form).attr('action'),
				type: $(form).attr('method'),
				data: $(form).serialize(),
				success: function (data) {
					$("#resultados").html(data);
					$('#resultados .btn-lg').click(function(){
							$("#resultados").empty();
						})
				}
			}).fail(function () {
				console.log("anda mal")
			});
		    });
			</script>
		<?php endwhile;?>
	<?php endif; ?>
</div>
<?php get_footer();?>


