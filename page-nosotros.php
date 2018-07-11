<?php /* Template Name: Nosotros */ ?>
<?php get_header(); // This fxn gets the header.php file and renders it ?>

<div id="nosotros-definicion">
			<div class="flip-container">
				<div class="flipper col-md-4">
					<div class="front">
						<div><h2><strong>Envíos</strong><br> en <strong>24hs.</strong></h2></div>
						<div class="bt"></div>
					</div>
					<div class="back">
						<div><h2>Somos <strong>la única empresa</strong> que llega a las <strong>principales ciudades del país en 24hs.</strong></h2></div>
						<div class="bt"></div>
					</div>
				</div>
			</div>
			<div class="flip-container">
				<div class="flipper col-md-4">
					<div class="front">
						<div><h2><strong>Máxima capilaridad</strong> y <strong>cobertura</strong> del <strong> mercado</strong>.</h2></div>
						<div class="bt"></div>
					</div>
					<div class="back">
						<div><h2>Somos la empresa de logística de <strong>mayor capilaridad</strong> y <strong>cobertura</strong> a nivel nacional.</h2></div>
						<div class="bt"></div>
					</div>
				</div>
			</div>
			<div class="flip-container">
				<div class="flipper col-md-4">
					<div class="front">
						<div><h2><strong>Más</strong> de <strong>400 agencias</strong>.</h2></div>
						<div class="bt"></div>
					</div>
					<div class="back">
						<div><h2>Tenemos <strong>más de 400 agencias</strong> distribuidas en <strong>cada rincón de la Argentina.</strong></h2></div>
						<div class="bt"></div>
					</div>
				</div>
			</div>
		</div>

	<div id="main" class="container single-page">
			<section class="content col-md-12">
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
								<div class="p-wrapper"><p><strong>Más de 1.000 micros </strong><br>de larga distancia.<br>-</p> </div>
							</div> 
							<div class="item"> 
								<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-2-infraestructura.jpg" alt="">
								<div class="p-wrapper"><p><strong>Flota propia </strong>de camionetas y utilitarios <strong>para retiro y entrega a domicilio</strong> en las principales ciudades del país.<br>-</p> </div>
							</div> 
							<div class="item"> 
								<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-1-infraestructura.jpg" alt="">
								<div class="p-wrapper"><p><strong>5 cabeceras propias</strong> ubicadas estratégicamente en <strong>C.A.B.A., Córdoba, Rosario, Santa Fe y Tucumán.</strong><br>-</p></div>
							</div> 
							<div class="item"> 
								<img src="<?php echo get_stylesheet_directory_uri();?>/images/slice-0-infraestructura.jpg" alt="">
								<div class="p-wrapper"><p><strong>Más de 400 agencias en red</strong><br>a nivel nacional.<br>-</p></div>
							</div> 
						</div>  
				</div>
				</div>
			</section>
	</div>
</div><!--wrapper-->
<div class="container">
	<div class="col-container">
		<div class="bg-lineas-diagonales col-md-1 col"></div>
		<div class="col-md-12 creado col"><p><strong>Integral Pack</strong> fue creada en el año 2002 a partir de la fusión de dos empresas: Andreani Bus S.A. e Indesgar S.R.L. Esta última era una empresa rosarina con <strong>más de 20 años de experiencia en logística sobre micros</strong> de transporte de pasajeros de mediana y larga distancia, mientras que Andreani Bus estaba formada por Andreani Logística S.A., con amplia experiencia en transporte sobre camiones.</p></div>
	</div>
	<div class="empresas">
		<header>
			<h3>Empresas que</h3>
			<h2>confían en nosotros</h2>
		</header>
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/ip-nuestroslientes.jpg" alt="Logos de nuestros clientes">
	</div>
</div>
 <div class="container back-footer"></div>

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
