$(document).ready(function() {

	$('.go-top').css({'display' : 'none'});

	$('.item-link').on('click', function(e){
		$('html,body').stop().animate({ scrollTop: $('#item-link-element').offset().top - 200}, 1000);
		e.preventDefault();
	});

	$(window).scroll(function() {

		if ($(this).scrollTop() > 200) {
			$('.go-top').css({'display' : 'block'});
		} else {
			$('.go-top').css({'display' : 'none'});
		}

	});

	$('.go-top').on('click', function(e){
		$('html,body').stop().animate({ scrollTop: $('#top').offset().top - 200}, 1000);
		e.preventDefault();
	});

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav',
		autoplay: true
	});

	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		nextArrow: $('.arrow-next'),
		prevArrow: $('.arrow-prev'),
		dots: true,
		centerMode: true,
		focusOnSelect: true
	});

	$(".set > a").on("click", function(){
		if($(this).hasClass('active')){
			$(this).removeClass("active");
			$(this).siblings('.content').slideUp(200);
			$(".set > a i").removeClass("fa-angle-up").addClass("fa-angle-down");
		}else{
			$(".set > a i").removeClass("fa-angle-up").addClass("fa-angle-down");
			$(this).find("i").removeClass("fa-angle-down").addClass("fa-angle-up");
			$(".set > a").removeClass("active");
			$(this).addClass("active");
			$('.content').slideUp(200);
			$(this).siblings('.content').slideDown(200);
		}
	});

	$("#slider-range-width").slider({
		range: true,
		min: 0,
		max: 2000,
		values: [ 200, 1000],
		classes: {
			"ui-slider": "border-0",
			"ui-slider-horizontal": "bg-dark",
			"ui-slider-range": "bg-primary",
			"ui-slider-handle": "rounded-circle"
		},
		slide: function(event, ui) {
			$("#width").val(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
		}
	});

	$("#slider-range-height").slider({
		range: true,
		min: 0,
		max: 2000,
		values: [ 200, 1000],
		classes: {
			"ui-slider": "border-0",
			"ui-slider-horizontal": "bg-dark",
			"ui-slider-range": "bg-primary",
			"ui-slider-handle": "rounded-circle"
		},
		slide: function(event, ui) {
			$("#height").val(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
		}
	});

	$("#slider-range-depth").slider({
		range: true,
		min: 0,
		max: 2000,
		values: [ 200, 1000],
		classes: {
			"ui-slider": "border-0",
			"ui-slider-horizontal": "bg-dark",
			"ui-slider-range": "bg-primary",
			"ui-slider-handle": "rounded-circle"
		},
		slide: function(event, ui) {
			$("#depth").val(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
		}
	});

	$("#slider-range-price").slider({
		range: true,
		min: 0,
		max: 300000,
		values: [ 100000, 200000],
		classes: {
			"ui-slider": "border-0",
			"ui-slider-horizontal": "bg-dark",
			"ui-slider-range": "bg-primary",
			"ui-slider-handle": "rounded-circle"
		},
		slide: function(event, ui) {
			$("#price").val(ui.values[ 0 ] + " руб - " + ui.values[ 1 ] + " руб");
		}
	});

	$("#width").val($( "#slider-range-width" ).slider( "values", 0 ) + " - " + $( "#slider-range-width" ).slider( "values", 1 ));
	$("#height").val($( "#slider-range-height" ).slider( "values", 0 ) + " - " + $( "#slider-range-height" ).slider( "values", 1 ));
	$("#depth").val($( "#slider-range-depth" ).slider( "values", 0 ) + " - " + $( "#slider-range-depth" ).slider( "values", 1 ));
	$("#price").val($( "#slider-range-price" ).slider( "values", 0 ) + " руб - " + $( "#slider-range-price" ).slider( "values", 1 ) + " руб");

	$('#myTable').DataTable({
		"language": {
			"url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Russian.json"
		}
	});

});