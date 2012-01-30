jQuery(function($){
	$('.datepicker').datepicker({
		changeYear: true,
		changeMonth: true,
		yearRange: '-30y:-15y',
		dateFormat: 'd/m/y',
	});

	$('.dropdown').dropdown();

	$('a[href=#]').live('click', function(){  return false; });
});