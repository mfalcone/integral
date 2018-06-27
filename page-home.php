<?php /* Template Name: Home */ ?>
<?php get_header(); // This fxn gets the header.php file and renders it ?>

<div class="simple-carousel" data-example-id="simple-carousel">
	<div class="carousel slide carousel-fade container" id="carousel-example-generic" data-ride="carousel">
		<ol class="carousel-indicators"> 
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
			<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li> 
			<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li> 
		</ol> 
		<div class="carousel-inner col-md-12 contenedor_carrusel" role="listbox"> 
			<div class="item active"> 
					<h3 class="caption">Bienvenidos a<strong> Integral Pack.</strong></h3>
					<h4>Soluciones lógisticas a la medida de sus necesidades</h4>
			</div> 
			<div class="item "> 
				<h3 class="caption">¿Compra o vende<strong> en Internet?</strong></h3>
				<h4 class="h4smaller">Diseñamos un servicio para que llegue en tiempo y forma a sus clientes</h4>
			</div> 
			<div class="item "> 
				<h3 class="caption">Cobertura Nacional</h3>
				<h4>Envíos a todo el país</h4>
			</div> 
		</div> 
		<a href="#carousel-example-generic" class="left carousel-control visible-xs visible-sm" role="button" data-slide="prev"> <span class="fa fa-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
		<a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next"> <span class="fa fa-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
	</div> 
	<div class="botones">
		<ul>
			<li><a href="#" data-toggle="modal" data-target="#envioModal"><img src="http://maxifalcone.org/integral/wp-content/themes/integral_express/images/envio_icon.png" alt="">Seguir envío</a></li>
			<li><a href="#" data-toggle="modal" data-target="#sucursalModal"><img src="http://maxifalcone.org/integral/wp-content/themes/integral_express/images/buscar_icon.png" alt="">Buscar agencias</a></li>
			<li><a href="<?php echo site_url(); ?>/todos-los-servicios/servicios-para-comercio-electronico/"> <img src="http://maxifalcone.org/integral/wp-content/themes/integral_express/images/ecomerce_icon.png" alt="">eCommerce</a></li>
		</ul>
	</div>
</div>


	<div id="main" class="container single-page">
			<section class="content col-md-8 col-md-offset-2 ">
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

		<!-- Modal -->
		<div id="envioModal" class="modal fade seguir-envio" role="dialog" style="display:none">
		  <div class="modal-dialog">
		  	<button type="button" class="close" data-dismiss="modal">&times;</button>
		    <!-- Modal content-->
		    <div class="modal-content">
				<input type="text" placeholder="Punto de venta">
				<select name="letra" id="letra">
					<option value="a">A</option>
					<option value="b">B</option>
					<option value="c">C</option>
					<option value="p">P</option>
				</select>
				<input type="text" placeholder="Número de Guía">
				<button type="button" class="btn-default">Seguir</button>		      
		    </div>
		  </div>
		</div>

		<!-- Modal -->
		<div id="sucursalModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
					
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Sucursal más cercana</h4>
				</div>
				<div class="modal-body">
						<input type="text" placeholder="Provincia">
						<input type="text" placeholder="Ciudad">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default">Buscar</button>
				</div>
			</div>

			</div>
		</div>
		<div id="nosotros-definicion">
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper col-md-4">
					<div class="front"><div><h2><strong>Envios</strong><br> en <strong>24hs.</strong></h2></div></div>
					<div class="back"><div><h2>Somos <strong>la única empresa</strong> que llega a las <strong>principales ciudades del país en 24hs.</strong></h2></div></div>
				</div>
			</div>
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper col-md-4">
					<div class="front"><div><h2><strong>Máxima capilaridad</strong> y <strong>cobertura</strong> del <strong> mercado</strong></h2></div></div>
					<div class="back"><div><h2>Somos la empresa de logística de <strong>mayor capilaridad</strong> y <strong>cobertura</strong> a nivel nacional.</h2></div></div>
				</div>
			</div>
			<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper col-md-4">
					<div class="front"><div><h2><strong>Más</strong> de <strong>400 agencias</strong></h2></div></div>
					<div class="back"><div><h2>Tenemos <strong>más de 400 agencias</strong> distribuidas en <strong>cada rincón de la Argentina.</strong></h2></div></div>
				</div>
			</div>
		</div>
		<section class="col-md-12">
			<div class="infra-carousel">
				<h1>Infraestructura</h1>
				<div class="carousel slide carousel-fade" id="carousel-infraestructura" data-ride="carousel">
					<div class="square"></div>
					<ol class="carousel-indicators"> 
						<li data-target="#carousel-infraestructura" data-slide-to="0" class="active"></li> 
						<li data-target="#carousel-infraestructura" data-slide-to="1" class=""></li> 
						<li data-target="#carousel-infraestructura" data-slide-to="2" class=""></li> 
						<li data-target="#carousel-infraestructura" data-slide-to="3" class=""></li> 
					</ol> 
					<div class="carousel-inner col-md-12" role="listbox"> 
						<div class="item active">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-3-infraestructura.jpg" alt="">
							<p><strong>Más de 1.000 micros </strong><br>de larga distancia.</p> 
						</div> 
						<div class="item"> 
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-2-infraestructura.jpg" alt="">
							<p><strong>Flota propia </strong>de camionetas y utilitarios <strong>para retiro y entrega a domicilio</strong> en las principales ciudades del país.</p> 
						</div> 
						<div class="item"> 
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-1-infraestructura.jpg" alt="">
							<p><strong>5 cabeceras propias</strong> ubicadas estratégicamente en <strong>C.A.B.A., Córdoba, Rosario, Santa Fe y Tucumán.</strong></p>
						</div> 
						<div class="item"> 
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-0-infraestructura.jpg" alt="">
							<p><strong>Más de 400 agencias en red</strong><br>a nivel nacional.</p>
						</div> 
					</div> 
				</div>
			</div>
		</section>
</div><!--wrapper-->
<div class="container">
	<div class="col-container">
		<div class="bg-lineas-diagonales col-md-1 col"></div>
		<div class="col-md-12 creado col"><p><strong>Integral Pack</strong> fue creada en el año 2002 a partir de la fusión de dos empresas: Andreani Bus S.A. e Indesgar S.R.L. Esta última era una empresa rosarina con <strong>más de 20 años de experiencia en logística sobre micros</strong> de transporte de pasajeros de mediana y larga distancia, mientras que Andreani Bus estaba formada por Andreani Logística S.A., con amplia experiencia en transporte sobre camiones.</p></div>
	</div>

</div>


<div class="container back-footer"></div>


<!-- Trigger the modal with a button -->



<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
