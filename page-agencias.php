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
			<input type="text" id="buscador-ciudad" placeholder="Ciudad" disabled>
			<a href="#" class="ubicacion-actual">Usar mi ubicación actual <i class="fa fa-map-marker"></i></a>
			<!--a href="#" id="boton-buscar" class="buscar">Buscar</a>-->
			<div class="mostrar-resultados" id="mostrar-resultados">
				<div class="cargando-text">Cargando...</div>
				<table>
					<tr>
						<td class="tit">Código de Agencia</td>
						<td class="res" id="cod-agen"></td>
					</tr>
					<tr>
						<td class="tit">Dirección</td>
						<td class="res" id="direccion-agen"></td>
					</tr>
					<tr>
						<td class="tit">Teléfono</td>
						<td class="res" id="telefono-agen"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-8">
			<div id="map">
				
			</div>
		</div>
	</div>


	<div id="main" class="col-md-12 resultados-agencia col-container">
		<div class="lineas-diagonales-page col-md-1 col"></div>
		
	</div>
</div><!--wrapper-->
<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;key=AIzaSyBE0lGz2Jl6eUtkEGcGA29P_KZ2GCAO4Sw&#038;ver=4.4.2"></script>
<script>
		$ = jQuery;
	 	var localidad;
	 	var agencia;
	 	var markers = [];
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

		function addMarker(location,ind) {
			marker = new google.maps.Marker({
				position: location,
				map: map,
				customInfo:ind
			});
			map.setZoom(15);
        	map.setCenter(marker.getPosition());
        	markers.push(marker);
        	google.maps.event.addDomListener(marker, 'click', function() {
	            ind = this.customInfo;
	            $("#mostrar-resultados table").show();
				$("#cod-agen").text(agencia.query[ind].agencia.codigo);
				$("#direccion-agen").text(agencia.query[ind].agencia.direccion);
				$("#telefono-agen").text(agencia.query[ind].agencia.Telefono);
				
	        });
		}

		 

   		  
		initMap();
	  	
		$("#buscador-provincia").autocomplete({
		    serviceUrl: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?provincias',
		    onSelect: function (suggestion) {
		    	$( "#buscador-ciudad" ).prop( "disabled", false );
		    	localidad = suggestion.data;
		        //alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
		    	iniciarBusquedaCiudad();


		    },
		    onSearchStart: function (query) {

		    	$("#buscador-provincia").addClass("loading");
		    } ,
		    onSearchComplete: function (query, suggestions) {
		    	$("#buscador-provincia").removeClass("loading");
		    }
		});

		function iniciarBusquedaCiudad(){
		$("#buscador-ciudad").autocomplete({
			 serviceUrl: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?localidad&num='+localidad,
			 onSelect: function (suggestion) {
		    	console.log(suggestion.data)
		    	console.log(suggestion.value)
		    		$("#mostrar-resultados").show();
		    		$("#mostrar-resultados .cargando-text").show();
		    		$("#mostrar-resultados table").hide();
		    		$.ajax({
					  url: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?agencia&agen_num='+suggestion.data,
					})
					.done(function( data ) {
						while (markers.length > 0) {
						        markers.pop().setMap(null);
						    }
						markers.length = 0;
					    $("#mostrar-resultados .cargando-text").hide();
					     agencia = jQuery.parseJSON(data);
						   if(Array.isArray(agencia.query)){
						   	var bounds = new google.maps.LatLngBounds();

						   	$.each(agencia.query,function(ind,val){
						   		var uniage = val;
						   		lat = uniage.agencia.latitud;
						   		lon = uniage.agencia.longitud;
						   		locacion = new google.maps.LatLng(lat,lon);
								addMarker(locacion,ind);
								console.log(locacion.lat())
								bounds.extend(locacion)
						   	})

						   	map.fitBounds(bounds);


					   }else{
							$("#mostrar-resultados table").show();
							$("#cod-agen").text(agencia.query.codigo);
							$("#direccion-agen").text(agencia.query.direccion);
							$("#telefono-agen").text(agencia.query.Telefono);
							lat = agencia.query.latitud;
							lon = agencia.query.longitud;
							locacion = new google.maps.LatLng(lat,lon);
							addMarker(locacion,0);
         				}
					  });


		    },
		    onSearchStart: function (query) {
		    	console.log("search start");
		    	$("#buscador-ciudad").addClass("loading");
		    	
		    } ,
		    onSearchComplete: function (query, suggestions) {
		    	console.log("search complete");
		    	$("#buscador-ciudad").removeClass("loading");
		    }

		})
	}

	  })
	</script>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
