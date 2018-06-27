jQuery(document).ready(function($){
	$('#carousel-example-generic').carousel({
		interval:4500
	})
	$('#carousel-example-generic h3').hide()
	$('#carousel-example-generic h4').hide()
	$('#carousel-example-generic .active h3').fadeIn();
	$('#carousel-example-generic .active h4').delay(600).fadeIn();
	$('#carousel-example-generic').on('slide.bs.carousel', function () {
		//$('#carousel-example-generic h3, #carousel-example-generic h4').hide()
		setTimeout(function(){
			
			$('#carousel-example-generic h3').hide()
			$('#carousel-example-generic h4').hide()

			$('#carousel-example-generic .active h3').fadeIn();
			$('#carousel-example-generic .active h4').delay(600).fadeIn();


		},1000)
	})

	$(window).on('scroll', function () {
	        var scroll = $(document).scrollTop();
	        $(".home .carousel-inner").css({
	            'background-position':'0% '+(-.4*scroll)+'px'
	        });
	        //console.log(scroll);
	        //console.log(parseInt($("body").height()-$(".back-footer").offset().top));
	        var ent = parseInt($("body").height()-scroll);
	         $(".back-footer").css({

	            'background-position':'0% '+(-.2*ent)+'px'
	        });
		})

	$(".botones a").on("click",function(){
		var estemodal = ($(this).data('target'))
		$(".modal").not(estemodal).modal("hide");
	})

	$('#carousel-infraestructura').carousel({
		interval:8000
	})

	

	$("#carousel-flota").carousel({
		interval:3000
	})



	$(".page-preguntas-frecuentes dt").click(function(){
		$(this).next().slideToggle();
	})

	$(".mobile-menu a").click(function(){
		$(".navbar").slideToggle();
	})
})