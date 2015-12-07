$("#flex-accordion-menu").ready(function() {
	var FAMroot = document.getElementById('flex-accordion-menu');
	var FAMul = FAMroot.getElementsByTagName("ul");
	var FAMa = FAMroot.getElementsByTagName("a");
	var thisURL=document.location.href;

	for (i=0; i<FAMul.length; i++){ // find (haveSub)
		FAMula = FAMul[i].parentNode.getElementsByTagName("a");
		$(FAMula[0]).addClass("haveSub");
	}; // end for (haveSub)
	
	for (i=0; i<FAMa.length; i++){ // find (thisPage)
		if (FAMa[i].href == thisURL){
			$(FAMa[i]).addClass("thisPage");
		};
	}; // end find (thisPage)
	
	$(".haveSub").after('<span class="opner"></span>'); // add (opner span)
	
	$("#flex-accordion-menu .opner").click(function(){ // add click (opner closer) function on (opner span)
		$(this).parent().children('ul').slideToggle('normal');
		if ($(this).hasClass('opner')){
			$(this).removeClass('opner').addClass('closer'); 
		}else{
			$(this).removeClass('closer').addClass('opner'); 
		}
	}); // end add click (opner closer)
	
	var FAMsub = $(".haveSub");
	for (i=0; i<FAMsub.length; i++){ // find haveSub with thisPage
		FAMsubthis = $(FAMsub[i].parentNode).find('.thisPage');
		if (FAMsubthis.length > 0){
			$(FAMsub[i]).addClass('haveThis');
		};
	};

	$(".haveSub").parent().children('ul').slideUp('fast', function() { // SlideUp full menu
		$(".opner").removeClass('opner').addClass('closer'); 
	}); // end SlideUp

	$(".haveThis").parent().children('ul').slideDown('fast', function() { // SlideDown menu for thisPage 
		$(this).parent().children('span').removeClass('closer').addClass('opner');
		$(".haveSub.thisPage").parent().children('ul').slideDown('fast', function() { // SlideDown menu on thisPage 
			$(this).parent().children('span').removeClass('closer').addClass('opner'); 
		}); // end SlideDown
	}); // end SlideDown

	$("#flex-accordion-menu").slideUp('fast', function() { // SlideUp root menu
		$("#flex-accordion-menu").slideDown('fast', function() { // SlideDown root menu
			$("#flex-accordion-menu").css('height','auto'); // Show menu
		}); // end SlideDown
	}); // end SlideUp
}); // end ready
