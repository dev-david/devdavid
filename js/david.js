$(document).ready(function()
{	
	$('.container-fluid').hide();
	$('.about_me').hide();
	$('.contact').hide();
	$('.dfade').hide();
	$('.container-fluid').fadeIn('slow');
	$('.dfade').fadeIn('slow');
	// $('.dfade').each(function(i) {
	// 	$(this).delay((i++) * 200).fadeIn(300);
	// })
	$('.about_me_link').click(function(){
		$('.david_main_page').fadeOut();
		$('.contact').fadeOut();
		// $('.about_me').delay(500).effect('slide',{direction:'right'});
		$('.about_me').delay(400).fadeIn();
	})
	$('.dev_david_link').click(function(){
		$('.about_me').fadeOut();
		$('.contact').fadeOut();
		// $('.david_main_page').delay(500).effect('slide',{direction:'right'});
		$('.david_main_page').delay(400).fadeIn();
	})
	$('.contact_link').click(function(){
		$('.david_main_page').fadeOut();
		$('.about_me').fadeOut();
		// $('.contact').delay(500).effect('slide',{direction:'right'});
		$('.contact').delay(400).fadeIn();
	})

});