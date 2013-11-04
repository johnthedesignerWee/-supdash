// JavaScript Document
$(function() {
	$('.addloc').click(function() {
		$('.location-selector').fadeToggle("fast");
		console.log("holler!");
	});

	$('.action.del').click(function() {
	  $(this).parents(".announcement").fadeOut(500, function() {           
	    $(this).parents(".announcement").remove();               
	  });
	});

	$('.action.edit').click(function() {
	  $(this).parents(".announcement").replaceWith( $( ".announcement-editor" )  );

	  $('.announcement-editor').removeClass('hide');
	  	  console.log(this);

	});

	$('.announcement-editor .close').click(function() {
	  $(this).parents(".announcement-editor").replaceWith( $( ".announcement.edited" ) );
	  $('.announcement.edited').removeClass('hide');
	  	  console.log(this);
	});

	$('.default').dropkick();
	$('.tooltip').tooltipster();

});