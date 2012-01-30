jQuery(function($){

	// Les datepicker
	$('.datepicker').datepicker({
		changeYear: true,
		changeMonth: true,
		yearRange: '-30y:-15y',
		dateFormat: 'd/m/y',
	});

	// Menu dropdown
	$('.dropdown').dropdown();
	$('.dropdown-menu').find('form').click(function(e) { e.stopPropagation(); });

	// Tous les liens sans destination
	$('a[href=#]').live('click', function(){  return false; });

	$('.alert-message .close').click(function(){
		$(this).parent().slideUp();
	});
});