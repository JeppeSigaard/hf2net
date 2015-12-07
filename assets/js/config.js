jQuery(document).ready(function($){
  	// Featured Slider
  	$('.bxslider').bxSlider({
  		mode: 'fade',
  		controls: false,
  		speed: 2000,
  		auto: true,
  		pause: 6000
  	});
  	// Resume show
  	$('.resume-click').click(function(){
  		$('.resume-show').toggle();
  		$('html,body').stop().animate({scrollTop:$(this).offset().top-32},500);
  	});
});