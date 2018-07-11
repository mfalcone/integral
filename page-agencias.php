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
			<input type="text" id="buscador-provincia" placeholder="Provincia" disabled>
			<input type="text" id="buscador-ciudad" placeholder="Ciudad" disabled>
			<a href="#" id="ubicacion-actual" class="ubicacion-actual">Usar mi ubicación actual <img src="<?php echo get_stylesheet_directory_uri();?>/images/mira-buscador-agencias.png" alt=""></a>
			<!--a href="#" id="boton-buscar" class="buscar">Buscar</a>-->
			<div class="mostrar-resultados" id="mostrar-resultados">
				<div class="cargando-text">Cargando...</div>
				<div class="msj">
					<p>
						Código de Agencia: <span id="cod-agen"></span>
					</p>
					<p>
						Dirección: <span class="res" id="direccion-agen"></span>
					</p>
					<p>
						Teléfono: <span id="telefono-agen"></span>
					</p>
					<p>
						Horario: <span id="horario-agen"></span>
					</p>
				</div>
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
	 	var provincias;
	 	var ciudades;
	 	var markers = [];
	 	var provin;
	 	var myaddress;
	  jQuery(window).load(function(){

	 


	  	var url_string = window.location.href
	  	var url = new URL(url_string);
		var ciudadid = url.searchParams.get("ciudadid");
		if(ciudadid){
			var ciudadurl = url.searchParams.get("ciudad");
			var provinciaurl = url.searchParams.get("provincia");
			$("#buscador-provincia").val(provinciaurl);
			$("#buscador-ciudad").val(ciudadurl);
			buscarAgencia(ciudadid);
		}


	  	var map;
	  	var loc;
	  	var me;
	  	$.ajax({
	  			url: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?provincias',
	  			 beforeSend: function(){
				     $("#buscador-provincia").addClass("loading");
				   },
				   complete: function(){
				    $("#buscador-provincia").removeClass("loading");
				   },
					}).done(function( data ) {
						$( "#buscador-provincia" ).prop( "disabled", false );
						provincias = jQuery.parseJSON(data);
						iniciarBusquedaProvincia();
					})
	  	
		
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
        		
	            if(ind == "single"){

	            	$("#mostrar-resultados table").show();
					$("#cod-agen").text(agencia.query.codigo);
					$("#direccion-agen").text(agencia.query.direccion);
					$("#telefono-agen").text(agencia.query.Telefono);
	            }else if(ind != null){
	             ind = this.customInfo;
	            $("#mostrar-resultados table").show();
				$("#cod-agen").text(agencia.query[ind].agencia.codigo);
				$("#direccion-agen").text(agencia.query[ind].agencia.direccion);
				$("#telefono-agen").text(agencia.query[ind].agencia.Telefono);
				}
	        });
		}

		function addMyMarker(location){
			marker = new google.maps.Marker({
				position: location,
				map: map,
				icon : "<?php echo get_stylesheet_directory_uri();?>/images/me-icon.png"
			});
		}

		 

   		  
		initMap();
	  	
	  	function iniciarBusquedaProvincia(){
			$("#buscador-provincia").autocomplete({
			    hideInvalidSuggestions: true,
			    minChars:0,
			    lookup:provincias.suggestions,
			    tabDisabled: true,
			    onSelect: function (suggestion) {
			    	
			    	localidad = suggestion.data;
			        
			        $.ajax({
	  			url: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?localidad&num='+localidad,
	  			beforeSend: function(){
				     $("#buscador-ciudad").addClass("loading");
				   },
				   complete: function(){
				    $("#buscador-ciudad").removeClass("loading");
				   },
					}).done(function( data ) {
						$( "#buscador-ciudad" ).prop( "disabled", false );
						ciudades = jQuery.parseJSON(data);
						iniciarBusquedaCiudad();
					})
			    

			    },
			    onSearchStart: function (query) {
			    	$("#buscador-provincia").addClass("loading");
			    	$("#buscador-ciudad").val("");
			    	$( "#buscador-ciudad" ).prop( "disabled", true );
			    	
			    } ,
			    onSearchComplete: function (query, suggestions) {

			    	$("#buscador-provincia").removeClass("loading");
			    	//$( "#buscador-ciudad" ).prop( "disabled", false );
			    }


			});
		}
		function iniciarBusquedaCiudad(){
		$("#buscador-ciudad").autocomplete({
			lookup:ciudades.suggestions,
			 //serviceUrl: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?localidad&num='+localidad,
			 matchContains: false,
			 minChars:0,
			hideInvalidSuggestions: true,
			 onSelect: function (suggestion) {
			 	buscarAgencia(suggestion.data)

		    },
		    onSearchStart: function (query) {
		    	
		    	$("#buscador-ciudad").addClass("loading");
		    	
		    	
		    } ,
		    onSearchComplete: function (query, suggestions) {
		    	
		    	$("#buscador-ciudad").removeClass("loading");
		    	
		    }



		})
	}

	function buscarAgencia(valor){

		    		$("#mostrar-resultados").show();
		    		$("#mostrar-resultados .cargando-text").show();
		    		$("#mostrar-resultados table").hide();
		    		$.ajax({
					  url: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?agencia&agen_num='+valor,
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
							addMarker(locacion,"single");

							var semana = [
						   			["Lunes",agencia.query.Lunes],
						   			["Martes",agencia.query.Martes],
						   			["Miércoles",agencia.query.Miercoles],
						   			["Jueves",agencia.query.Jueves],
						   			["Viernes",agencia.query.Viernes],
						   			["Sábado",agencia.query.Sábado],
						   			["Domingo",agencia.query.Domingo]
						   			];
						   		var dias_habiles = [];
						   		$.each(semana,function(ind,val){
						   				if(semana[ind][1]==1){
						   					dias_habiles.push(semana[ind][0]);
						   					if(dias_habiles.length>0){
						   						$("#horario-agen").html('De '+dias_habiles[0]+' a '+dias_habiles[dias_habiles.length-1]);
						   					}
						   					$("#horario-agen").append('<br> de '+agencia.query.Apertura+" a "+agencia.query.Cierre)
						   					
						   				}
						   		})
         				}
					  });
	}

		$("#ubicacion-actual").click(function(){
			$("#ubicacion-actual").text("cargando...");
			if (navigator.geolocation) navigator.geolocation.getCurrentPosition(function(pos) {
					
					me = new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude);
					displayLocation(pos.coords.latitude, pos.coords.longitude)
				}, function(error) {
					alert("para usar este servicio es necesario activar la geolocalización")
				});
		})


		function displayLocation(latitude,longitude){
	        var request = new XMLHttpRequest();

	        var method = 'GET';
	        var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+latitude+','+longitude+'&sensor=true';
	        	var async = true;

	        request.open(method, url, async);
	        request.onreadystatechange = function(){
	          if(request.readyState == 4 && request.status == 200){
		            var data = JSON.parse(request.responseText);
		            if(data.status!="OVER_QUERY_LIMIT"){
		            myaddress = data;
		            var address = data.results[0];
		            
		            valor=address.formatted_address.split(",");
		            count=valor.length;
		            pais=valor[count-1];
	                provin=valor[count-2];
	                provposta = $.trim(provin).toUpperCase();
	                

	                ciudad=	myaddress.results[1].address_components[1].long_name
	                ciudadposta = $.trim(ciudad).toUpperCase();
	                

		            $.each(provincias.suggestions,function(ind,val){
		            	if(val.value==provposta){
				            		console.log("hay coincidencia");

				            		$("#buscador-provincia").val(provposta);
				            		$("#buscador-ciudad").val(ciudadposta);

				            		ciudad_id = val.data;
				            		$.ajax({
									  url: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?localidad&num='+ciudad_id,
									})
									.done(function( data ) {
										ciudades = JSON.parse(data);
										$.each(ciudades.suggestions,function(ind,val){
											
											if(val.value==ciudadposta){

												console.log("hay coincidencia de ciudad")
												agencia_id = val.data;
												$.ajax({
												  url: '<?php echo get_stylesheet_directory_uri();?>/json-res.php?agencia&agen_num='+agencia_id,
												}).done(function(data){
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
																bounds.extend(locacion);
														   	})
														   	addMyMarker(me,null);
														   	bounds.extend(me);

														   	map.fitBounds(bounds);
													   }else{
															lat = agencia.query.latitud;
															lon = agencia.query.longitud;
															locacion = new google.maps.LatLng(lat,lon);
															var bounds = new google.maps.LatLngBounds();
															bounds.extend(locacion)
															bounds.extend(me);
															$("#mostrar-resultados").show();
															$("#mostrar-resultados .cargando-text").hide();
									    					$("#mostrar-resultados table").hide();
															addMarker(locacion,"single");
															addMyMarker(me,null);
															console.log(me)
															map.fitBounds(bounds);
															map.setCenter(bounds.getCenter());
															$("#ubicacion-actual").html('Usar mi ubicación actual <i class="fa fa-map-marker"></i>');
													}
												})
												
											}

										})

										
										//map.setZoom(15);
									})
		            	}
		            })

		            
				}else{
					alert("Aguarde un minuto por favor");
					$("#ubicacion-actual").html('Usar mi ubicación actual <i class="fa fa-map-marker"></i>');
				}

	          }
	        };
	        request.send();
	      };

	  })
	</script>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
