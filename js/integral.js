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
	        /*var ent = parseInt($("body").height()-scroll);
	         $(".back-footer").css({

	            'background-position':'0% '+(-.2*ent)+'px'
	        });*/
		})

	$(".botones a").on("click",function(){
		var estemodal = ($(this).data('target'))
		$(".modal").not(estemodal).modal("hide");
	})

	$('#carousel-infraestructura').carousel({
		interval:8000
	})

	$('#carousel-infraestructura').bind('slid.bs.carousel', function (e) {
	    res = $("#carousel-infraestructura .carousel-inner").height()-$("#carousel-infraestructura .active img").height()
		console.log(res);
		$("#carousel-infraestructura .active .p-wrapper").height(res)
	});


	$("#carousel-flota").carousel({
		interval:3000
	})



	$(".page-preguntas-frecuentes dt").click(function(){
		$(this).next().slideToggle();
	})

	$(".mobile-menu a").click(function(){
		$(".navbar").slideToggle();
	})

	var velocidad = 100;
	var animacionvuelve = 2000;
	
	$(".flip-container .front .bt").on("hover",
	    function(e) {
	        $(this).parent().animate({
	        	top:'-254px'
	        },velocidad)
	        $(".flip-container .back").animate({
	        	top:'0'
	        },velocidad)
	    }
	);

	$(".flip-container .back .bt").on("mouseout",
	    function() {
	    	$(this).parent().animate({
	        	top:'254px'
	        },velocidad)
	        $(".flip-container .front").animate({
	        	top:'0'
	        },velocidad)
	    }
	);
	function lavuelta(el){
		$(el).parent().delay(animacionvuelve).animate({
	        	top:'0'
	        },velocidad)

	        $(".flip-container .back").delay(animacionvuelve).animate({
	        	top:'254px'
	        },velocidad)
	}

	$(".flip-container .front .bt").on("touchstart",
	    function(e) {
	    	$(this).parent().animate({
	        	top:'-254px'
	        },velocidad)
	        $(".flip-container .back").animate({
	        	top:'0'
	        },velocidad)
	        var el = this;
	        setTimeout(lavuelta(el),animacionvuelve);
	    }
	);

	
})