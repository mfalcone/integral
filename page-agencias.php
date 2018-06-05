<?php /* Template Name: Agencias */ ?>
<?php get_header();?>
	<div class="breadcrumb">
		<?php if(function_exists('bcn_display'))
	{
		bcn_display();
	}?>
	</div>
	<div class="buscador-agencias">
		<div class="col-md-4">
			<h1>Buscador de Agencias</h1>
			<input type="text" id="buscador-provincia" placeholder="Provincia">
			<input type="text" id="buscador-ciudad" placeholder="Ciudad">
			<a href="#" class="ubicacion-actual">Usar mi ubicación actual <i class="fa fa-map-marker"></i></a>
			<a href="#" id="boton-buscar" class="buscar">Buscar</a>
		</div>
		<div class="col-md-8">
			<div id="map">
				
			</div>
		</div>
	</div>


	<div id="main" class="col-md-12 resultados-agencia col-container">
		<div class="lineas-diagonales-page col-md-1 col"></div>
		<section class="col col-md-8 contenido-page">
		<?php
			if (have_posts()) :
				while (have_posts()) :
				  the_post();
					 the_content();
				endwhile;
				endif;
		?>
		</section>
	</div>
</div><!--wrapper-->
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;key=AIzaSyChYCQ7TAvJC6E_I4XCnEuOTDuOV-_lOWY&#038;ver=4.4.2"></script>
<script>
	 
	  jQuery(window).load(function(){

	  	var map;
	  	var loc;

		function initMap() {

			loc = {lat: -34.603722, lng: -58.381592};
			map = new google.maps.Map(document.getElementById('map'), {
				zoom: 4,
				center: loc
			});
		}

		function addMarker(location) {
			marker = new google.maps.Marker({
				position: location,
				map: map
			});
			map.setZoom(15);
        	map.setCenter(marker.getPosition());
		}

		 

   		 jQuery("#boton-buscar").click(function(){
   		 	if(jQuery("#buscador-provincia").val() == "Santa Fe" && jQuery("#buscador-ciudad").val()=="Rosario"){
   		 		Rosario = new google.maps.LatLng(-32.9477087,-60.6326545);
          		addMarker(Rosario);
          	}
   		 })

		initMap();
	  	

	  })
	</script>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
